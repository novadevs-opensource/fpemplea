<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use AppBundle\Entity\Usuarios;
use AppBundle\Entity\Categorias;
use AppBundle\Entity\Ofertas;
use AppBundle\Entity\OfertasHasCategorias;
use AppBundle\Entity\Perfilestudiante;
use AppBundle\Entity\PerfilestudianteHasOfertas;
use AppBundle\Entity\PerfilestudianteHasFormacion;
use AppBundle\Entity\Perfilempresa;
use AppBundle\Entity\PerfilempresaHasCategorias;
use AppBundle\Entity\Centroestudios;
use AppBundle\Entity\Rrss;
use AppBundle\Entity\FormacionHasCentroestudios;
use AppBundle\Entity\ApplicantHasWorkexp;
use AppBundle\Entity\UserHasSn;
use AppBundle\Entity\Message;

use AppBundle\Form\UserHasSnType;
use AppBundle\Form\PerfilestudianteType;
use AppBundle\Form\PerfilempresaType;
use AppBundle\Form\OfertasType;
use AppBundle\Form\UsuariosType;
use AppBundle\Form\MessageType;

use AppBundle\Controller\RegisterController;

class DefaultController extends Controller
{
    private $session;

    public function __construct() {
        $this->session = new Session();
    }

// *
// *
// *
// MAIN AREA
// *
// *
// *
    public function indexAction()
    {
        $em = $this -> getDoctrine() -> getManager();
        $perfilEmpresa_rep = $em -> getRepository("AppBundle:Perfilempresa");
        $empresas=$perfilEmpresa_rep -> findBy(array(), array('id' => 'ASC'));
        
        return $this -> render('Frontend/indexFront.html.twig', array(
            "empresas" => $empresas
        ));
    }

    public function userIndexAction($idUser)
    {
        $em = $this -> getDoctrine() -> getManager();
        $perfilEmpresa_rep = $em -> getRepository("AppBundle:Perfilempresa");
        $empresas=$perfilEmpresa_rep -> findBy(array(), array('id' => 'ASC'));

        $alert_rep = $em->getRepository("AppBundle:Alert");
        $alerts = $alert_rep->findByUserid($idUser);
        $notRead = null;
        
        return $this -> render('Frontend/indexFront.html.twig', array(
            'empresas' => $empresas,
            'alerts' => $alerts, 
            'notRead' => $notRead
        ));
    }
    
    public function indexProfileAction($idUser)
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

        //Auth token compare
        $current = $this->session->get('securityToken');     
        if ( ($user == false) || $current != $usertoken) 
        {
            throw $this->createAccessDeniedException();
        }

        $alert_rep = $em->getRepository("AppBundle:Alert");
        $alerts = $alert_rep->findByUserid($idUser);
        $notRead = null;        

        if($role == 'ROLE_STUDENT')
        {
            $applicant_rep = $em -> getRepository("AppBundle:Perfilestudiante");
            $applicant = $applicant_rep -> findOneByIdusuario($idUser);

            $pfRelation_rep = $em->getRepository("AppBundle:PerfilestudianteHasFormacion");
            $applicantEducation = $pfRelation_rep->findByPerfilestudiante($applicant, array('start' => 'DESC'));

            $awRelation_rep = $em->getRepository("AppBundle:ApplicantHasWorkexp");
            $applicantWorkexp = $awRelation_rep->findByApplicant($applicant, array('start' => 'DESC'));

            $sn =  $em->getRepository('AppBundle:UserHasSn')->findByUser($idUser);

            return $this -> render('Frontend/profile/indexProfileApplicant.html.twig', array(
                'estudiante' => $applicant, 
                'applicantEdu' => $applicantEducation,
                'applicantWork' => $applicantWorkexp,
                'alerts' => $alerts, 
                'notRead' => $notRead,
                'sn' => $sn
            ));
        }
        
        elseif($role == 'ROLE_COMPANY')
        {
            $company_rep = $em -> getRepository("AppBundle:Perfilempresa");
            $company = $company_rep -> findOneByIdusuario($idUser);

            $sn =  $em->getRepository('AppBundle:UserHasSn')->findByUser($idUser);

            return $this -> render('Frontend/profile/indexProfileCompany.html.twig', array(
                'empresa' => $company, 
                'alerts' => $alerts, 
                'notRead' => $notRead,
                'sn' => $sn
            ));
        }
        
        elseif($role == 'ROLE_SCHOOL')
        {
            $school_rep = $em -> getRepository("AppBundle:Centroestudios");
            $school = $school_rep -> findOneByIdusuario($idUser);
            
            $pfRelation_rep = $em->getRepository("AppBundle:PerfilestudianteHasFormacion");
            $applicantSchool = $pfRelation_rep -> findBySchool($school->getId());

            // echo '<pre>';
            // print_r($applicantSchool[0]->getPerfilestudiante());

            $sn =  $em->getRepository('AppBundle:UserHasSn')->findByUser($idUser);

            return $this -> render('Frontend/profile/indexProfileSchool.html.twig', array(
                'centro' => $school,
                'applicantSchool' => $applicantSchool,
                'alerts' => $alerts, 
                'notRead' => $notRead,
                'sn' => $sn
            ));
        }
    }
    
    /**
     * @Security("has_role('ROLE_SCHOOL') or has_role('ROLE_COMPANY') or has_role('ROLE_STUDENT')")
     */
    public function indexPublicProfileAction($idUser, $idVisitor)
    {
        $em = $this->getDoctrine()->getManager();

        $perfilEmpresa_rep = $em -> getRepository("AppBundle:Perfilempresa");
        $empresa = $perfilEmpresa_rep -> findOneByIdusuario($idUser);

        $applicant_rep = $em -> getRepository("AppBundle:Perfilestudiante");
        $applicant = $applicant_rep -> findOneByIdusuario($idUser);
        
        $company_rep = $em -> getRepository("AppBundle:Perfilempresa");
        $company = $company_rep -> findOneByIdusuario($idUser);
        
        $school_rep = $em -> getRepository("AppBundle:Centroestudios");
        $school = $school_rep -> findOneByIdusuario($idUser);
        
        if($applicant)
        {
            //SEND ALERT
            $user_rep = $em->getRepository("AppBundle:Usuarios");

            $profileUser = $applicant->getIdusuario();
            $profileUser = $user_rep->findOneById($profileUser);
            
            $visitor = $user_rep->findOneById($idVisitor);
            $visitorRole = $visitor->getRole();
            
            if($visitorRole == 'ROLE_SCHOOL')
            {
                $visitor = $school_rep -> findOneByIdusuario($idVisitor);
                $visitor = $visitor->getNombre();

            }
            elseif($visitorRole == 'ROLE_STUDENT')
            {
                if($idVisitor != $idUser)
                {
                    $visitor = $applicant_rep -> findOneByIdusuario($idVisitor);
                    $visitor = $visitor->getNombre();
                }
            }
            elseif($visitorRole == 'ROLE_COMPANY')
            {
                if($idVisitor != $idUser)
                {
                    $visitor = $company_rep -> findOneByIdusuario($idVisitor);
                    $visitor = $visitor->getNombreempresa();
                }
            }

            //Creating alert
            $u = $applicant;
            $AlertNotification = $this->get('AlertNotificationGenerator');
            $AlertNotification->visitorNotificationAlertAction(
                $u->getEmail(), 
                $u->getNombre(), 
                $visitor,
                $profileUser
            );
            //END SEND ALERT
        }

        $pfRelation_rep = $em->getRepository("AppBundle:PerfilestudianteHasFormacion");
        $applicantEducation = $pfRelation_rep->findByPerfilestudiante($applicant);
        $applicantSchool = $pfRelation_rep -> findBySchool($school);

        $awRelation_rep = $em->getRepository("AppBundle:ApplicantHasWorkexp");
        $applicantWorkexp = $awRelation_rep->findByApplicant($applicant);

        $alert_rep = $em->getRepository("AppBundle:Alert");
        $alerts = $alert_rep->findByUserid($idVisitor);
        $notRead = null;
        
        return $this -> render('Frontend/indexPublicProfile.html.twig', array(
            'applicant' => $applicant, 
            'empresa' => $empresa,
            'centro' => $school,
            'applicantEdu' => $applicantEducation,
            'applicantWork' => $applicantWorkexp,
            'applicantSchool' =>$applicantSchool,
            'alerts' => $alerts,
            'notRead' => $notRead
        ));
    }
     
// *
// *
// *
// ADMIN PROFILE AREA
// *
// *
// *
    /**
     * @Security("has_role('ROLE_SCHOOL') or has_role('ROLE_COMPANY') or has_role('ROLE_STUDENT')")
     */
    public function avatarEditAction(Request $request){
        $id = $this->getUser()->getId();
        $role = $this->getUser()->getRole();
        $em = $this->getDoctrine()->getManager();

        if($role == 'ROLE_STUDENT'){
            $profile_rep = $em->getRepository("AppBundle:Perfilestudiante");

        } elseif ($role == 'ROLE_COMPANY'){
            $profile_rep = $em->getRepository("AppBundle:Perfilempresa");

        } elseif ($role == 'ROLE_SCHOOL'){
            $profile_rep = $em->getRepository("AppBundle:Centroestudios");
        }
        $profile = $profile_rep->findOneByIdusuario($id);

        $savedImage = $profile->getImagen();

        $form = $this->createFormBuilder($profile, array('action' => $this->generateUrl('avatar_edit')))
            ->add('imagen', FileType::class, array(
                "label" => "Imagen:*",
                "attr" =>array("class" => "form-control"),
                "data_class" => null,
                'required' => false)
            )
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $profile->getImagen();

            if($form['imagen']->getData() != NULL) {
                // Generate a unique name for the file before saving it
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                // Move the file to the directory where imagens are stored
                $file->move(
                    $this->getParameter('profileavatar_directory'),
                    $fileName
                );
                $profile->setImagen($fileName);
                // $profile=$form->getData();
            } else{
                // $profile=$form->getData();
                $profile->setImagen($savedImage);
            }

            $em->persist($profile);
            $em->flush();
            $url = $this->generateUrl('profile', array('idUser' => $id));

            $flashMessage = "Informacion actualizada correctamente";
            $this->session->getFlashBag()->set('profileEditSucc', $flashMessage);

            return $this->redirectToRoute('profile', array('idUser' => $id));

        } else {
            return $this -> render(
                'Frontend/profile/changeImg.html.twig', 
                array(
                    'request' => $request->files,
                    'currentImg' => $savedImage,
                    'form' => $form->createView()
                )
            );
        }
    }

    public function resetPwdAction(Request $request, $idUser)
    {
        $em = $this->getDoctrine()->getManager();
        $user_rep = $em->getRepository("AppBundle:Usuarios");
        
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
        
        //Auth token compare
        $current = $this->session->get('securityToken');     
        if ( ($user == false) || $current != $usertoken) 
        {
            throw $this->createAccessDeniedException();
        }

        $form = $this->createFormBuilder($user)
            ->setAction($this->generateUrl('reset_pwd', array('idUser'=>$idUser)))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Nueva contraseña'),
                'second_options' => array('label' => 'Repetir nueva contraseña'),
            ))
            ->getForm();

        $form -> handleRequest($request);

        if ($form->isSubmitted() && $form -> isValid()) 
        {
            $user = $form->getData();
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $form->getData()->getPlainPassword());
            $user->setPassword($password);

            $em->persist($user);
            $em -> flush();

            $flashMessage = "Tu contraseña se ha cambiado satisfactoriamente";
            $this->session->getFlashBag()->set('pwdChanged', $flashMessage);

            return $this -> redirectToRoute('profile', array('idUser' => $idUser));
        }
        elseif ($form->isSubmitted() == true && $form -> isValid() == false) 
        {
            $flashMessage = "Ha ocurrido un error, vuelve a intentarlo";
            $this->session->getFlashBag()->set('pwdChanged', $flashMessage);
            return $this -> redirectToRoute('profile', array('idUser' => $idUser));
        }
        else
        {
            return $this -> render('Frontend/profile/resetPwd.html.twig', array(
                'form' => $form->createView()
            ));
        }
    }

    /**
     * @Route("/forgot-password/{mail}/", defaults={"mail": "null"}, name="forgot_password")
     */
    public function forgotPassword($mail)
    {
        $em = $this->getDoctrine()->getManager();

        $user_rep = $em->getRepository("AppBundle:Usuarios");
        $user = $user_rep->findOneByEmail($mail);

        if ($user == null){
            $user = $user_rep->findOneByNif($mail);
        }

        if ($user == null){

            $errorsString['status'] = 'ERROR';
            $errorsString['arg'] = $mail;

            $response = new Response();
            $response->setContent(json_encode(array(
                    'data' => $errorsString,
            )));
            $response->headers->set('Content-Type', 'application/json');
            return $response;   
        } 
        else {
            $resultString['status'] = 'OK';
            $resultString['arg'] = $user->getEmail();
            $response = new Response();
            $response->setContent(json_encode(array(
                    'data' => $resultString,
            )));

            $response->headers->set('Content-Type', 'application/json');
        }


        $email = $user->getEmail();
        //Generating new password
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $genPassword = substr( str_shuffle( $chars ), 0, 8 );
        $user->setPlainPassword($genPassword);
        //Setting new password
        $password = $this->get('security.password_encoder')->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
        $em -> persist($user);
        $em -> flush();
        //Sending email
        $mailNotification = $this->get('MailNotificationGenerator');
        $mailNotification->registerMailAlertAction($user->getPlainPassword(), $user->getEmail(), $user->getNif());

        // return $this -> render('Frontend/forgot.html.twig', array(
        //         'email' => $email
        //     )
        // );
        return $response;   
    }

// *
// *
// *
// SOCIAL NETWORK AREA
// *
// *
// *
    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_COMPANY') or has_role('ROLE_SCHOOL')")
     */
    public function snListAction($idUser)
    {
        $em = $this->getDoctrine()->getManager();
        $sn =  $em->getRepository('AppBundle:UserHasSn')->findByUser($idUser); 

        return $this -> render('Frontend/socialNetworkList.html.twig', array(
            'sn' => $sn, 
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_COMPANY') or has_role('ROLE_SCHOOL')")
     */
    public function snAddAction(Request $request, $idUser)
    {
        $em = $this->getDoctrine()->getManager();
        $user_rep = $em->getRepository("AppBundle:Usuarios");
        $user = $user_rep->findOneById($idUser);

        //Auth token compare
        $current = $this->session->get('securityToken');     
        $usertoken = $user->getSecurityToken();
        if ($current != $usertoken) 
        {
            throw $this->createAccessDeniedException();
        }

        $sn = new UserHasSn();

        $form = $this -> createForm(UserHasSnType::class, $sn, array(
            'action' => $this->generateUrl('sn_add', array('idUser' => $idUser))
        ));
        $form -> handleRequest($request);

        if ($form -> isSubmitted() && $form -> isValid()) 
        {
            $usRelation = $form -> getData();
            $usRelation->setUser($user);

            $em -> persist($usRelation);
            $em -> flush();
           
            $response = new Response();

            $res['result'] = 'OK';
            $res['userId'] = $user->getId();
            $res['relId'] = $usRelation->getId();
            $res['delPath']= $this->generateUrl('sn_del', array(
                    'idUser' => $user->getId(),
                    'usRelationId' => $usRelation->getId()
                )
            );

            $response = new Response();
            $response->setContent(json_encode(array(
                'data' => $res,
            )));

            $response->headers->set('Content-Type', 'application/json');
            return $response;

            // return $this->redirectToRoute('profile', array('idUser' => $idUser));

        }
        elseif ($form->isSubmitted() == true && $form -> isValid() == false)
        {   
       
            $validator = $this->get('validator');
            $errors = $validator->validate($form);
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

        return $this->render('Frontend/profile/SocialNetworkAdd.html.twig', array(
            'form' => $form->createView()));

    }

    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_COMPANY') or has_role('ROLE_SCHOOL')")
     */
    public function snDeleteAction($idUser, $usRelationId)
    {
        $em = $this->getDoctrine()->getManager();

        $user_rep = $em->getRepository("AppBundle:Usuarios");
        $user = $user_rep->findOneById($idUser);

        //Auth token compare
        $current = $this->session->get('securityToken');     
        $usertoken = $user->getSecurityToken();
        if ($current != $usertoken) 
        {
            throw $this->createAccessDeniedException();
        }

        $sn_rep = $em->getRepository("AppBundle:UserHasSn");
        $sn = $sn_rep->findOneById($usRelationId);

        $em->remove($sn);
        $flush=$em->flush();

        $flashMessage = "Has borrado la red social correctamente";
        $this->session->getFlashBag()->set('snSucc', $flashMessage);

        return $this -> redirectToRoute('profile', array('idUser' => $idUser));
    }

// *
// *
// *
// ALERT AREA
// *
// *
// *
    /**
     * @Route("/ver-alreta/{idAlert}", name="check_alert")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_COMPANY') or has_role('ROLE_SCHOOL')")
     */
    public function checkAlertAction($idAlert)
    {
        $em = $this->getDoctrine()->getManager();
        
        $alert_rep = $em->getRepository("AppBundle:Alert");
        $alert = $alert_rep->findOneById($idAlert);

        $alert->setStatus(1);

        $em->persist($alert);
        $em->flush();

        return $this->render('Alerts/profileVisitor.html.twig', array(
            'alert' => $alert,
            'userid' => $alert->getUserid()
        ));
    }

    /**
     * @Route("/ver-alreta-aplicantes/{idAlert}", name="check_applicant_alert")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_COMPANY') or has_role('ROLE_SCHOOL')")
     */
    // public function checkApplicantAlertAction($idAlert)
    // {
    //     $em = $this->getDoctrine()->getManager();
        
    //     $alert_rep = $em->getRepository("AppBundle:Alert");
    //     $alert = $alert_rep->findOneById($idAlert);

    //     $alert->setStatus(1);

    //     $em->persist($alert);
    //     $em->flush();

    //     return $this->render('Alerts/checkOfferApplyAlert.html.twig', array(
    //         'alert' => $alert
    //     ));
    // }


    /**
     * @Route("/contactar/{idUser}/{senderId}/{senderMail}", name="contact_mail")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_COMPANY') or has_role('ROLE_SCHOOL')")
     */
    public function ContactMailAction(Request $request, $idUser, $senderId, $senderMail)
    {
        $em = $this->getDoctrine()->getManager();
        
        $user_rep = $em->getRepository("AppBundle:Usuarios");
        $user = $user_rep->findOneById($idUser);

        //Auth token compare
        //*****FIXME
        // $current = $this->session->get('securityToken');     
        // $usertoken = $user->getSecurityToken();
        // if ($current != $usertoken) 
        // {
        //     throw $this->createAccessDeniedException();
        // }

        $message = new Message();

        if($user->getRole() == 'ROLE_STUDENT') 
        {   
            $applicant_rep = $em->getRepository("AppBundle:Perfilestudiante");
            $profile = $applicant_rep->findOneByIdusuario($idUser);
            $userMail = $profile->getEmail();
        }
        elseif($user->getRole() == 'ROLE_COMPANY')
        {
            $company_rep = $em->getRepository("AppBundle:Perfilempresa");
            $profile = $company_rep->findOneByIdusuario($idUser);
            $userMail = $profile->getEmailcontacto();
        }
        elseif($user->getRole() == 'ROLE_SCHOOL')
        {
            $school_rep = $em->getRepository("AppBundle:Centroestudios");
            $profile = $user_rep->findOneByIdusuario($idUser);
            $userMail = $profile->getEmail();
        }

        $form = $this -> createForm(MessageType::class, $message, array(
            'action' => $this->generateUrl('contact_mail', array('idUser' => $idUser, 'senderId' => $user->getEmail(), 'senderMail' => $senderMail))
        ));

        $form -> handleRequest($request);

        if ($form -> isSubmitted() && $form -> isValid()) 
        {
            $mail = $form -> getData();
            try{
                $date = date("Y-m-d h:m:s");
                $mail->setCreatedat(new \DateTime($date));

                $ContactMail = $this->get('ContactMailGenerator');
                $ContactMail->ContactMailAction($userMail, $user, $mail->getBody(), $mail->getSubject(), $senderMail);

                $em -> persist($mail);
                $em -> flush();
                //TODO:
                // //Creating alert
                // $u = $applicant;
                // $AlertNotification = $this->get('AlertNotificationGenerator');
                // $AlertNotification->visitorNotificationAlertAction(
                //     $u->getEmail(), 
                //     $u->getNombre(), 
                //     $visitor,
                //     $profileUser
                // );

                // //Sending email
                // if($u->getEmail())
                // {
                //   $mailNotification = $this->get('MailNotificationGenerator');
                //   $mailNotification->visitorMailAlertAction(
                //     $u->getEmail(), 
                //     $u->getNombre(), 
                //     $visitor
                //   );
                // }
            } catch( \Doctrine\DBAL\Exception\UniqueConstraintViolationException $e){
                $flashMessage = "Ha ocurrido un error, inténtalo de nuevo (Red social duplicada)";
                $this->session->getFlashBag()->set('snErr', $flashMessage);  
                return $this -> redirectToRoute('homepage');
            }
            $flashMessage = "Has enviado tu mensaje correctamente";
            $this->session->getFlashBag()->set('snSucc', $flashMessage);
            return $this -> redirectToRoute('homepage');
        }
        elseif ($form->isSubmitted() == true && $form -> isValid() == false)
        {   
            $flashMessage = "Ha ocurrido un error, inténtalo de nuevo";
            $this->session->getFlashBag()->set('snErr', $flashMessage);
            return $this -> redirectToRoute('homepage');

        }
        return $this->render('Frontend/profile/crudContact.html.twig', array(
            'form' => $form->createView()));
    }

//TODO: CHECK IF THIS METHODS ARE BEING USED
    /**
     * @Route("/crear-estudio/empresa/{idCentro}/{id}", name="crear_formacion_reglada")
     * @Security("has_role('ROLE_SCHOOL') or has_role('ROLE_COMPANY')")
     */
    public function crearFormacionRegladaAction(Request $request, $idCentro, $id)
    {                   
        $em = $this->getDoctrine()->getManager();
        $perfilEmpresa_rep = $em->getRepository("AppBundle:Perfilempresa");
        $empresa = $perfilEmpresa_rep->findById($idEmpresa);
        
        $oferta = new Ofertas();
        $form = $this -> createForm(OfertasType::class, $oferta, array(
            'action' => $this->generateUrl('crear_oferta', array('id' => $id, 'idEmpresa' => $idEmpresa)),
        ));
        $form -> handleRequest($request);
        
        
        if ($form -> isSubmitted() && $form -> isValid()) {

            $oferta = $form -> getData();
            $em -> persist($oferta);
            
            $relacionOC = new OfertasHasCategorias();
            $relacionOC_rep = $em->getRepository("AppBundle:OfertasHasCategorias");
            
            $em -> flush();
            
            return $this -> redirectToRoute('profile', array('idUser' => $id));
        }

        return $this->render('Frontend/profile/crearOferta.html.twig', array(
            'form' => $form->createView()));
    }
    
    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT')")
     */
    public function modificarFormacionAction(Request $request, $id, $idF)
    {
        $em = $this->getDoctrine()->getManager();
        $perfilestudiante_rep = $em->getRepository("AppBundle:Perfilestudiante");
        $perfil = $perfilestudiante_rep->findOneByIdusuario($id);
        
        $formacion_rep = $em->getRepository("AppBundle:Formacion");
        $formacion = $formacion_rep->findOneById($idF);

        $form = $this->createForm(FormacionType::class, $formacion);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $perfil=$form->getData();
            $em->persist($perfil);
            $em->flush();

            return $this->redirectToRoute('profile', array('idUser' => $id));
        }

        return $this->render('Frontend/profile/crudFormacion.html.twig', array(
            'form' => $form->createView()));
    }

    /**
     * @Route("/terminos", name="terms")
     */
    public function termsAction() {
        return $this -> render('Frontend/terms.html.twig', array());
    }
}



         
