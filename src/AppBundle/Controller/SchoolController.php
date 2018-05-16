<?php
//src/AppBundle/Controller/SchoolController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Categorias;
use AppBundle\Entity\Ofertas;
use AppBundle\Entity\OfertasHasCategorias;
use AppBundle\Entity\Perfilestudiante;
use AppBundle\Entity\PerfilestudianteHasOfertas;

use AppBundle\Entity\Centroestudios;
use AppBundle\Form\CentroestudiosType;

class SchoolController extends Controller{
    
    private $session;

    public function __construct() {
        $this->session=new Session();
    }

    /**
     * @Route("/como-empezar-centro/{id}", name="crear_centro")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_SCHOOL')")
     */
    public function crearCentroAction(Request $request, $id)
    {                   
        $em = $this->getDoctrine()->getManager();
        $user_rep = $em->getRepository("AppBundle:Usuarios");
        //This will be used To  check if user has been already created and make the redirect after the ajax call
        $profile_rep = $em->getRepository("AppBundle:Centroestudios");
        
        try {
            $user = $user_rep->findOneById($id);
        } catch (Exception $e) {
            $user = false;
        }finally{
            if ($user != false){
                $role = $user->getRole();
                $usertoken = $user->getSecurityToken();
            }else{
                throw $this->createAccessDeniedException();
            }
        }

        $perfil = new Centroestudios();

        $user = $this->getUser();
        $perfil->setCif($user->getNif());
        $perfil->setEmail($user->getEmail());

        $form = $this->createForm(CentroestudiosType::class, $perfil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user -> setDone(1);

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
            $perfil->setIdusuario($user);
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

        return $this->render('Frontend/registration/wizardSchool.html.twig', array(
            'form' => $form->createView()));
    }

    /**
     * @Route("/modificar-centro/{id}", name="modificar_centro")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_SCHOOL')")
     */
    public function schoolModifyAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $school_rep = $em->getRepository("AppBundle:Centroestudios");
        $school = $school_rep->findOneByIdusuario($id);
        $savedImage = $school->getImagen();
        
        $form = $this->createForm(CentroestudiosType::class, $school, array(
            'action' => $this->generateUrl('modificar_centro', array(
              'id' => $id
            ))
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $file = $school->getImagen();
            
            // if($form['imagen']->getData() != NULL)
            // {
            //     // Generate a unique name for the file before saving it
            //     $fileName = md5(uniqid()).'.'.$file->guessExtension();

            //     // Move the file to the directory where imagens are stored
            //     $file->move(
            //         $this->getParameter('profileavatar_directory'),
            //         $fileName
            //     );

            //     $school->setImagen($fileName);
            //     $school=$form->getData();
            // }
            // else
            // {
                $school=$form->getData();
                $school->setImagen($savedImage);
            // }
            $em -> persist($school);
            $em -> flush();

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
            // $flashMessage = "Ha ocurrido un error, inténtalo de nuevo";
            // $this->session->getFlashBag()->set('profileEditErr', $flashMessage);
            $validator = $this->get('validator');
            $errors = $validator->validate($school);
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

        return $this->render('Frontend/profile/crudCentro.html.twig', array(
            'form' => $form->createView(),
            ));
    }

    /**
     * @Route("/mis-alumnos/{$idSchool}", name="school_list_applicant")
     */
    public function listApplicantAction($idSchool)
    {
        $em = $this -> getdoctrine() -> getManager();

        $school_rep = $em->getRepository("AppBundle:Centroestudios");
        $school = $school_rep->findOneById($idSchool);

        $applicant_rep = $em -> getRepository("AppBundle:PerfilestudianteHasFormacion");
        $applicant = $applicant_rep -> findBySchool($school);
        
        return $this -> render('Frontend/profile/schoolApplicantList.html.twig', array("applicants" => $applicant));
    }
}