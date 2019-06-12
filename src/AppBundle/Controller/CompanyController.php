<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Entity\Categorias;
use AppBundle\Entity\Ofertas;
use AppBundle\Entity\OfertasHasCategorias;
use AppBundle\Entity\Perfilestudiante;
use AppBundle\Entity\PerfilestudianteHasOfertas;
use AppBundle\Entity\Perfilempresa;
use AppBundle\Entity\PerfilempresaHasCategorias;
use AppBundle\Entity\Centroestudios;
use AppBundle\Entity\Practicas;
use AppBundle\Entity\Empleo;
use AppBundle\Entity\Rrss;

use AppBundle\Form\PerfilempresaType;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class CompanyController extends Controller{
  
    private $session;

    public function __construct() {
        $this->session=new Session();
    }

    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_SCHOOL')")
     */
    public function listadoEmpresasAction($page,$idUser)
    {
        $em = $this -> getdoctrine() -> getManager();
        $perfilEmpresa_rep = $em -> getRepository("AppBundle:Perfilempresa");
        //$empresas = $perfilEmpresa_rep -> findAll(array(), array('id' => 'ASC'));

        $alert_rep = $em->getRepository("AppBundle:Alert");
        $alerts = $alert_rep->findByUserid($idUser);
        $notRead = null;

        $pageSize = $this->container->getParameter('records_per_page');
        $paginator = $perfilEmpresa_rep->getPaginateCompany($pageSize,$page);
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / $pageSize);

        return $this->render('Frontend/listado.html.twig', array(
            //"categories"=>$categories,
            "alerts" => $alerts,
            "notRead" => $notRead,
            "res"     => $paginator,
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "current" => $page
        ));
    }
    
    /**
     * @Route("/como-empezar-empresa/{id}", name="crear_empresa")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_COMPANY')")
     */
    public function crearEmpresaAction(Request $request, $id)
    {                   
        $em = $this->getDoctrine()->getManager();
        $usuario_rep = $em->getRepository("AppBundle:Usuarios");
        $usuario = $usuario_rep->findOneById($id);

        //This will be used To  check if user has been already created and make the redirect after the ajax call
        $profile_rep = $em->getRepository("AppBundle:Perfilempresa");

        //Auth token compare
        $current = $this->session->get('securityToken');     
        $usertoken = $usuario->getSecurityToken();
        if ($current != $usertoken) 
        {
            throw $this->createAccessDeniedException();
        }

        $perfil = new Perfilempresa();
        $user = $this->getUser();
        $perfil->setCif($user->getNif());
        $perfil->setEmailcontacto($user->getEmail());

        $form = $this->createForm(PerfilempresaType::class, $perfil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $usuario -> setDone(1);

            // /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            // $file = $perfil->getImagen();

            // // Generate a unique name for the file before saving it
            // $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // // Move the file to the directory where imagens are stored
            // $file->move(
            //     $this->getParameter('profileavatar_directory'),
            //     $fileName
            // );

            // // instead of its contents
            // $perfil->setImagen($fileName);
            $perfil->setIdusuario($usuario);
            $perfil=$form->getData();

            //Checking if user has been already created
            if ($profile_rep->findOneByIdusuario($id)) {
                $flashMessage = "Tus cambios se han guardado satisfactoriamente";
                $this->session->getFlashBag()->set('profileEditSucc', $flashMessage);

                return $this->redirectToRoute('profile', array('idUser' => $id));
            } else {
                $em->persist($perfil);
                $em->flush();
            }

            $flashMessage = "Tus cambios se han guardado satisfactoriamente";
            $this->session->getFlashBag()->set('profileEditSucc', $flashMessage);

            return $this->redirectToRoute('profile', array('idUser' => $id));
        }
        elseif ($form->isSubmitted() == true && $form -> isValid() == false)
        {   
            // $flashMessage = "Ha ocurrido un error, inténtalo de nuevo";
            // $this->session->getFlashBag()->set('profileEditErr', $flashMessage);
            $validator = $this->get('validator');
            $errors = $validator->validate($perfil);
            if (count($errors) > 0) {
                /*
                 * Uses a __toString method on the $errors variable which is a
                 * ConstraintViolationList object. This gives us a nice string
                 * for debugging.
                 */
                for ($i=0; $i < count($errors) ; $i++) { 
                    $errorsString[$i] = (string) $errors[$i];
                }
                $response = new Response();
                $response->setContent(json_encode(array(
                    'data' => json_encode($errorsString),
                )));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }
        }

        return $this->render('Frontend/registration/wizardCompany.html.twig', array(
            'form' => $form->createView()));
    }
    
    /**
     * @Route("/modificar-perfil-empresa/{id}", name="modificar_empresa")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_COMPANY')")
     */
    public function modificarEmpresaAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $perfilEmpresa_rep = $em->getRepository("AppBundle:Perfilempresa");
        $perfil = $perfilEmpresa_rep->findOneByIdusuario($id);
        $savedImage = $perfil->getImagen();

        $category = $perfil->getSector();
        
        $form = $this->createForm(PerfilempresaType::class, $perfil, array(
            'action' => $this->generateUrl('modificar_empresa', array('id' => $id),['_fragment' => '#edit']),
        ));
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $file = $perfil->getImagen();
            
            // if($form['imagen']->getData() != NULL)
            // {
            //     // Generate a unique name for the file before saving it
            //     $fileName = md5(uniqid()).'.'.$file->guessExtension();

            //     // Move the file to the directory where imagens are stored
            //     $file->move(
            //         $this->getParameter('profileavatar_directory'),
            //         $fileName
            //     );

            //     $perfil->setImagen($fileName);
            //     $perfil=$form->getData();
            // }
            // else
            // {
                $perfil=$form->getData();
                // $perfil->setImagen($savedImage);
            // }
            
            $em->persist($perfil);            
            $em->flush();

            $flashMessage = "Informacion actualizada correctamente";
            $this->session->getFlashBag()->set('profileEditSucc', $flashMessage);

            return $this->redirectToRoute('profile', array('idUser' => $id));
            // $response = new Response();
            // $response->setContent(json_encode(array(
            //     'data' => 'OK',
            // )));
            // $response->headers->set('Content-Type', 'application/json');
            // return $response;
        }
        elseif ($form->isSubmitted() == true && $form -> isValid() == false)
        {   
            $file = $perfil->getImagen();
            
            $validator = $this->get('validator');
            $errors = $validator->validate($perfil);
            if (count($errors) > 0) {
                /*
                 * Uses a __toString method on the $errors variable which is a
                 * ConstraintViolationList object. This gives us a nice string
                 * for debugging.
                 */
                for ($i=0; $i < count($errors) ; $i++) { 
                    $errorsString[$i] = (string) $errors[$i];
                }
                $response = new Response();
                $response->setContent(json_encode(array(
                    'data' => json_encode($errorsString),
                )));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }
        }

        return $this->render('Frontend/profile/crudEmpresa.html.twig', array(
            'form' => $form->createView(),
            'cat' => $category));
    }
    
    /**
     * @Route("/mis-ofertas/empresa/{idPerf}", name="mis_ofertas_empresa")
     */
    public function listadoOfertasCompanyProfileAction($idPerf)
    {
        $em = $this -> getdoctrine() -> getManager();
        $ofertas_rep = $em -> getRepository("AppBundle:Ofertas");
        $ofertas = $ofertas_rep -> findByIdempresa($idPerf);
        
        $empresas_rep = $em -> getRepository("AppBundle:Perfilempresa");
        $empresa = $empresas_rep -> findById($idPerf);
        
        return $this->render('Frontend/misOfertasEmpresa.html.twig', array("ofertas" => $ofertas,
                                                                           "empresa" => $empresa
                                                                          ));
    }

}