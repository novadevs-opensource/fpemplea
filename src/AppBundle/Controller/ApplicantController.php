<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use AppBundle\Entity\Categorias;
use AppBundle\Entity\Ofertas;
use AppBundle\Entity\OfertasHasCategorias;
use AppBundle\Entity\Perfilestudiante;
use AppBundle\Entity\PerfilestudianteHasOfertas;
use AppBundle\Entity\Perfilempresa;
use AppBundle\Entity\PerfilempresaHasCategorias;
use AppBundle\Entity\Centroestudios;
use AppBundle\Entity\Rrss;
use AppBundle\Entity\ApplicantHasWorkexp;
use AppBundle\Entity\Alert;
use AppBundle\Entity\Formacion;

use AppBundle\Form\PerfilestudianteType;
use AppBundle\Form\ApplicantHasWorkexpType;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;


class ApplicantController extends Controller{

    private $session;

    public function __construct() {
        $this->session=new Session();
    }

    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_SCHOOL')")
     * @Route("/modificar-cv/{idUser}", name="cv-edit")
     */
    public function getApplicantCVAction($idUser)
    {
        $em = $this->getDoctrine() -> getManager();
        $user_rep = $em -> getRepository("AppBundle:Usuarios");

        try {
            $user = $user_rep->findOneById($idUser);
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

        $current = $this->session->get('securityToken');     
        if ( ($user == false) || $current != $usertoken) 
        {
            throw $this->createAccessDeniedException();
        }

        $alert_rep = $em->getRepository("AppBundle:Alert");
        $alerts = $alert_rep->findByUserid($idUser);
        $notRead = null;        

        $applicant_rep = $em -> getRepository("AppBundle:Perfilestudiante");
        $applicant = $applicant_rep -> findOneByIdusuario($idUser);

        $sn =  $em->getRepository('AppBundle:UserHasSn')->findByUser($idUser);

        return $this -> render('Frontend/profile/indexProfileApplicantCV.html.twig', array(
            'estudiante' => $applicant, 
            'alerts' => $alerts, 
            'notRead' => $notRead,
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_COMPANY') or has_role('ROLE_SCHOOL')")
     */
    public function listadoEstudiantesAction($page, $idUser)
    {
        $em = $this->getdoctrine()->getManager();
        $pageSize = $this->container->getParameter('records_per_page');

        $applicant_rep = $em->getRepository('AppBundle:Perfilestudiante');
        $paginator = $applicant_rep->getPaginateApplicant($pageSize,$page);
       
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / $pageSize);

        $education_rep = $em->getRepository('AppBundle:Formacion');
        $education  = $education_rep->findAll();

        return $this -> render('Frontend/listado.html.twig', array(
            'res' => $paginator, 
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "current" => $page,
            'education' => $education
        ));
    }
    
    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT')")
     */
    public function crearEstudianteAction(Request $request, $id)
    {              
        $em = $this->getDoctrine()->getManager();
        $user_rep = $em->getRepository("AppBundle:Usuarios");

        //This will be used To  check if user has been already created and make the redirect after the ajax call
        $profile_rep = $em->getRepository("AppBundle:Perfilestudiante");

        $usuario = $user_rep->findOneById($id);
        $usertoken = $usuario->getSecurityToken();

        //Auth token compare
        $current = $this->session->get('securityToken');     
        if ( ($usuario == false) || $current != $usertoken) 
        {
            throw $this->createAccessDeniedException();
        }

        $perfil = new Perfilestudiante();

        $user = $this->getUser();
        $perfil->setDni($user->getNif());
        $perfil->setEmail($user->getEmail());

        $form = $this->createForm(PerfilestudianteType::class, $perfil);
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
        // if($current = $usertoken)
        // {
        return $this->render('Frontend/registration/wizardApplicant.html.twig', array(
            'form' => $form->createView()));
        // }
        // else{
        //     echo  "errroooooor pajaro";
        // }
        
    }
    
    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT')")
     */
    public function modificarEstudianteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $perfilestudiante_rep = $em->getRepository("AppBundle:Perfilestudiante");
        $user_rep = $em->getRepository("AppBundle:Usuarios");        
        
        try {
            $user = $user_rep->findOneById($id);
        } catch (Exception $e) {
            $user = false;
        }finally{
            if ($user != false)
            {
                $usertoken = $user->getSecurityToken();
                //Auth token compare
                $current = $this->session->get('securityToken');     
                if ( ($user == false) || $current != $usertoken) 
                {
                    throw $this->createAccessDeniedException();
                }
                $perfil = $perfilestudiante_rep->findOneByIdusuario($id);
            }
            else
            {
                throw $this->createAccessDeniedException();
            }
        }
        
        $form = $this->createForm(PerfilestudianteType::class, $perfil, array(
            'action' => $this->generateUrl('modificar_estudiante', array('id' => $id)),
        ));
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $perfil=$form->getData();

            $em->persist($perfil);
            $em->flush();

            $flashMessage = "Informacion actualizada correctamente";
            $this->session->getFlashBag()->set('profileEditSucc', $flashMessage);

            $url = $this->generateUrl('profile', array('idUser' => $id));
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

        return $this->render('Frontend/profile/crudEstudiante.html.twig', array(
            'form' => $form->createView()
        ));
    }
     
    /**
     * @Route("/postular/{id}/{idUser}", name="postular_oferta")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT')")
     */
    public function postularOferta($id, $idUser)
    {
        $em = $this -> getdoctrine() -> getManager();
        
        $offer_rep = $em -> getRepository("AppBundle:Ofertas");
        $offer = $offer_rep -> findOneById($id);
        
        $estudiantes_rep = $em -> getRepository("AppBundle:Perfilestudiante");
        $estudiante = $estudiantes_rep -> findOneByIdusuario($idUser);
        
        $relacionEO = new PerfilestudianteHasOfertas();
        $relacionEO -> setPerfilestudianteid($estudiante);
        $relacionEO -> setOfertasid($offer);
        //$relacionEO -> setStatus(1);
        
        $em->persist($relacionEO);

        $em -> flush();
        
        $inscribed = $offer->getInscribed();
        $inscribed = $inscribed + 1;
        $offer->setInscribed($inscribed);

        $em->persist($offer);
        $em->flush();

        $company = $offer->getIdempresa();

        $applicant = $estudiante;

        //Creating alert and sendig email
            $alertNotification = $this->get('AlertNotificationGenerator');
            $alertNotification->offerApplyAlertAction(
                $company->getEmailcontacto(), 
                $company, 
                $applicant,
                $offer
            );

            $mailNotification = $this->get('MailNotificationGenerator');
            $mailNotification->offerApplyMailAlertAction(
                $company->getEmailcontacto(), 
                $company, 
                $applicant,
                $offer
            );

        $message = "Has postulado correctamente a la oferta";
        $this->get('session')->getFlashBag()->add("register",$message);
        // return $this->render('Frontend/indexFront.html.twig');
        return $this -> redirectToRoute('ver_mi_oferta', array('id'=>$offer->getId(),'idUser'=>$idUser));
    }
    
//    TODO - COLOCAR EN EL LUGAR ADECUADO
    /**
     * @Route("/ver-mi-oferta/{id}/{idUser}", name="ver_mi_oferta")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT')")
     */
    public function verMiOferta($id, $idUser)
    {
        $em = $this -> getdoctrine() -> getManager();
        
        $ofertas_rep = $em -> getRepository("AppBundle:Ofertas");
        $oferta = $ofertas_rep -> findOneById($id);
        
        $estudiantes_rep = $em -> getRepository("AppBundle:Perfilestudiante");
        $estudiante = $estudiantes_rep -> findOneByIdusuario($idUser);
        
        $relacionOE_rep = $em -> getRepository("AppBundle:PerfilestudianteHasOfertas");
        $relacionOE = $relacionOE_rep -> findByOfertasid($id);
        
        
        return $this->render('Frontend/verOferta.html.twig', array(
                "oferta" => $oferta, 
                "estudiante" => $estudiante, 
                "relacionOE" => $relacionOE
            ));
    }
    

    public function listadoOfertasProfileEstudianteAction($idPerf)
    {
        $em = $this -> getdoctrine() -> getManager();
        
        $relacionOE_rep = $em -> getRepository("AppBundle:PerfilestudianteHasOfertas");
        $relacionOE = $relacionOE_rep -> findByperfilestudianteid($idPerf);
        
        $estudiantes_rep = $em -> getRepository("AppBundle:Perfilestudiante");
        $estudiante = $estudiantes_rep -> findOneById($idPerf);
        
        $ofertas_rep = $em -> getRepository("AppBundle:Ofertas");
        $ofertas = $ofertas_rep -> findById($relacionOE);
        
        //$ofertas
        $totalCounter = count($relacionOE);
        $paginationSize = 1;
        
        
        return $this->render('Frontend/applicantOffers.html.twig', array(
            "ofertas" => $ofertas, 
            "relacionOE" => $relacionOE, 
            "estudiante" => $estudiante, 
            "totalCounter" => $totalCounter,
            "paginationSize" => $paginationSize
        ));
    }
   
   /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT')")
     */
    public function applicantWorkAddAction(Request $request, $idApplicant, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $awRelation = new ApplicantHasWorkexp();

        $form = $this->createForm(ApplicantHasWorkexpType::class, $awRelation, array(
            'action' => $this->generateUrl('applicant_add_work', array('idApplicant' => $idApplicant, 'id' => $id))
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $applicant_rep = $em->getRepository("AppBundle:Perfilestudiante");
            $applicant = $applicant_rep->findOneById($idApplicant);

            $awRelation = $form->getData();
            $awRelation->setApplicant($applicant);
            $em->persist($awRelation);
            $em->flush();

            // $flashMessage = "Informacion actualizada correctamente";
            // $this->session->getFlashBag()->set('profileEditSucc', $flashMessage);
            // return $this->redirectToRoute('profile', array('idUser' => $id));
            $res['relId'] = $awRelation->getId();
            $res['userId'] = $applicant->getIdUsuario()->getId();
            $res['delPath']= $this->generateUrl('applicant_delete_workexp', array(
                    'id' => $awRelation->getId(), 
                    'idUser' => $applicant->getIdUsuario()->getId()
                )
            );

            $condition = $awRelation->getCompany();
            if ( !is_null($condition) ) {
                $res['company'] = $awRelation->getCompany()->getNombreempresa();
            } else {
                 $res['company'] = $awRelation->getOtherCompany();
            }

            $response = new Response();
            $response->setContent(json_encode(array(
                'data' => $res,
            )));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
        elseif ($form->isSubmitted() == true && $form -> isValid() == false)
        {   
            // $flashMessage = "Ha ocurrido un error, inténtalo de nuevo";
            // $this->session->getFlashBag()->set('profileEditErr', $flashMessage);
            $validator = $this->get('validator');
            $errors = $validator->validate($awRelation);
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

        return $this->render('Frontend/profile/crudApplicantWork.html.twig', array(
            'form' => $form->createView(),
            'applicant' => $idApplicant,
            'id' => $id
            ));
    }

    /**
     * @Route("/mi-formacion/{idApplicant}", name="applicant_list_education")
     */
    public function applicantWorkListAction($idApplicant)
    {
        $em = $this->getdoctrine()->getManager();
        
        $applicant_rep = $em->getRepository("AppBundle:Perfilestudiante");
        $applicant = $applicant_rep->findOneById($idApplicant);
        
        $awRelation_rep = $em->getRepository("AppBundle:ApplicantHasWorkexp");
        $workExp = $awRelation_rep->findByApplicant($applicant->getId());

        return $this -> render('Frontend/applicantWorkexpList.html.twig', array("work" => $workExp));
    }

    /**
     * @Route("/eliminar-mi-experiencia/{id}/{idUser}", name="applicant_delete_workexp")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT')")
     */
    public function applicantDeleteWorkAction($id, $idUser)
    {
        $em = $this -> getdoctrine() -> getManager();
        
        $awRelation_rep = $em ->getRepository("AppBundle:ApplicantHasWorkexp");
        $workExp = $awRelation_rep -> findOneById($id);

        $em->remove($workExp);
        $flush=$em->flush();

        $result = true;
        $flashMessage = "Informacion actualizada correctamente";
        $this->session->getFlashBag()->set('profileEditSucc', $flashMessage);

        return $this -> redirectToRoute('profile', array(
            'idUser' => $idUser,
            'result' => $result
            ));
    }

    public function applicantSearchAction($type, $fieldOne, $fieldTwo)
    {
        $em = $this -> getdoctrine() -> getManager();
        $filterRequest = Request::createFromGlobals();

        if( $filterRequest->query->get('type') )
        {
            $fieldOne = strtolower($filterRequest->query->get('fieldOne'));
            $type = $filterRequest->query->get('type');

            $entity = 'Perfilestudiante';

            // Custom repo class
            $repo = $em->getRepository('AppBundle:Perfilestudiante');
            $repoResult = $repo->getResultAndCount($type, $entity, $fieldOne, $fieldTwo);
            list($res) = array_values($repoResult);
            // End custom repo class
        }
        elseif ( $filterRequest->query->get('fieldTwo') ) 
        {
            //The following two statements are needed because education filter hasn't any type text input
            $type = strtolower($filterRequest->query->get('fieldTwo'));
            $fieldTwo = "formacion";

            $entity = 'PerfilestudianteHasFormacion';

            // Custom repo class
            //Noob statements to get correct values
            $repo = $em->getRepository('AppBundle:PerfilestudianteHasFormacion');
            $repoResult = $repo->getResultAndCount($type, $entity, $fieldOne, $fieldTwo);
            list($res) = array_values($repoResult);
            // End custom repo class
            for($i = 0; $i < count($res); $i++){
                $res[$i] = $res[$i]->getPerfilestudiante();
            }
        }
        else{
            $repo = $em->getRepository('AppBundle:Perfilestudiante');
            $res = $repo->findAll();
        }

        //To get fieldTwo(education) select values
        $education_rep = $em->getRepository('AppBundle:Formacion');
        $education  = $education_rep->findAll();
        
        return $this -> render('Frontend/searchResult.html.twig', array(
            'res' => $res, 
            'type'=>$type,
            'education' => $education
        ));
    }
    
    //TODO
    /**
     * @Route("/fulltext/{type}", 
     *     name="fulltext", 
     *     defaults={"type"="%"})
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_COMPANY') or has_role('ROLE_SCHOOL')")
     */
    public function fullTextAction($type)
    {
        $em = $this -> getdoctrine() -> getManager();
        $filterRequest = Request::createFromGlobals();
        if( $filterRequest->query->get('type') )
        {
            $type = $filterRequest->query->get('type');
        }
        
        // Custom repo class
        $repo = $em->getRepository('AppBundle:Perfilestudiante');
        $repoResult = $repo->getFullText($type);
        // End custom repo class
        
        //echo "Ruta de prueba: http://localhost/FP-Emplea/webApp/web/app_dev.php/listado-prueba/1/all/apellidos/Apellidos 20Test6 <br>";
        return $this -> render('Frontend/listado.html.twig', array(
            'res' => $repoResult, 
        ));
    }
    
}