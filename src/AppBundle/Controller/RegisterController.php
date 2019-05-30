<?php
// src/AppBundle/Controller/RegistrationController.php
namespace AppBundle\Controller;

use AppBundle\Form\UsuariosType;
use AppBundle\Entity\Usuarios;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class RegisterController extends Controller
{
    
    private $session;

    public function __construct() {
		$this->session=new Session();
	}
    
   /**
     * @Route("/register-applicant", name="applicant_registration")
     */
    public function registerApplicantAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user = new Usuarios();
        $form = $this->createForm(UsuariosType::class, $user, array(
            'action' => $this->generateUrl('applicant_registration'),
        ));

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $data = $form->getData();
            // Temporary disabled;
            // if ( $this->isAllowed($em, $data) ) {
                //This will be used To  check if user has been already created and make the redirect after the ajax call
                $profile_rep = $em->getRepository("AppBundle:Perfilestudiante");

                $password = $this->get('security.password_encoder')->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($password);

                //Setting auto generated username, it will be used to create future user tokens.
                $email = $user->getEmail();
                $user->setUsername($email);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                
                $flush = $em->flush();
                
                //Calling to flashbag creation method.
                $this->setRegisterFlashBag($flush);
                
                //Calling to mail alert services.
                $mailNotification = $this->get('MailNotificationGenerator');
                $mailNotification->registerMailAlertAction('*****', $user->getEmail(), $user->getNif());

                return $this->redirectToRoute('homepage_login');
            // } else {
                // $res['status'] = 'ERROR';
                // $res['msg'] = "El NIF " . $data->getNif() ." no está permitido en la fase beta";
                // $this->setRegisterFlashBag($res['msg']);
                // $response = new Response();
                // $response->setContent(json_encode(array(
                //         'data' => $res,
                // )));
                // $response->headers->set('Content-Type', 'application/json');
                // return $response; 
            // }
        }
        elseif ($form->isSubmitted() == true && $form->isValid() == false)
        {   
            $validator = $this->get('validator');
            $errors = $validator->validate($user);
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

        return $this->render(
            'Frontend/registration/registerApplicant.html.twig',
            array('form' => $form->createView())
        );
    } 
    /**
     * @Route("/register-company", name="company_registration")
     */
    public function registerCompanyAction(Request $request)
    {
        $user = new Usuarios();
        $form = $this->createForm(UsuariosType::class, $user, array(
            'action' => $this->generateUrl('company_registration'),
        ));
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $data = $form->getData();
            $candidate_nif = $data->getNif();

            $em = $this->getDoctrine()->getManager();

            // Changed at: 4th April 2019
            // Reason: Disable 
            // $en_id_rep = $em->getRepository("AppBundle:ValidatedUserIds");
            // try {
            //     $enabled_id = $en_id_rep->findOneBy(
            //         array('userId' => $candidate_nif, 'appRole' => 'ROLE_COMPANY')
            //     );
            // } catch(Exception $e) {
            //     return false;
            // }
            // Changed at: 4th April 2019
            // Reason: Disable 
            // if ( is_null($enabled_id) ) {
            //     $res['status'] = 'ERROR';
            //     $res['msg'] = "El NIF " . $candidate_nif ." no está permitido en la fase Beta";

            //     $response = new Response();
            //     $response->setContent(json_encode(array(
            //             'data' => $res,
            //     )));
            //     $response->headers->set('Content-Type', 'application/json');
            //     return $response; 
            // } else {
                //This will be used To  check if user has been already created and make the redirect after the ajax call
                $profile_rep = $em->getRepository("AppBundle:Perfilempresa");

                $password = $this->get('security.password_encoder')->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($password);

                //Setting auto generated username, it will be used to create future user tokens.
                $email = $user->getEmail();
                $user->setUsername($email);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                
                $flush = $em->flush();
                
                //Calling to flashbag creation method.
                $this->setRegisterFlashBag($flush);
                
                //Calling to mail alert services.
                $mailNotification = $this->get('MailNotificationGenerator');
                $mailNotification->registerMailAlertAction('*****', $user->getEmail(), $user->getNif());

                // return $this->redirectToRoute('homepage_login');
            // }
        }
        elseif ($form->isSubmitted() == true && $form -> isValid() == false)
        {   
            // $flashMessage = "Ha ocurrido un error, inténtalo de nuevo";
            // $this->session->getFlashBag()->set('profileEditErr', $flashMessage);
            $validator = $this->get('validator');
            $errors = $validator->validate($user);
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
        
        return $this->render(
            'Frontend/registration/registerCompany.html.twig',
            array('form' => $form->createView())
        );
    }
    
    
    /**
     * @Route("/register-school", name="school_registration")
     */
    public function registerSchoolAction(Request $request)
    {
        $user = new Usuarios();
        $form = $this->createForm(UsuariosType::class, $user, array(
            'action' => $this->generateUrl('school_registration'),
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $data = $form->getData();
            $candidate_nif = $data->getNif();

            $em = $this->getDoctrine()->getManager();
            $en_id_rep = $em->getRepository("AppBundle:ValidatedUserIds");
            try {
                $enabled_id = $en_id_rep->findOneBy(
                    array('userId' => $candidate_nif, 'appRole' => 'ROLE_SCHOOL')
                );
            } catch(Exception $e) {
                return false;
            }
            if ( is_null($enabled_id) ) {
                $res['status'] = 'ERROR';
                $res['msg'] = "El NIF " . $candidate_nif ." no está permitido en la fase Beta";

                $response = new Response();
                $response->setContent(json_encode(array(
                        'data' => $res,
                )));
                $response->headers->set('Content-Type', 'application/json');
                return $response; 
            } else {
                //This will be used To  check if user has been already created and make the redirect after the ajax call
                $profile_rep = $em->getRepository("AppBundle:Centroestudios");

                $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($password);

                //Setting auto generated username, it will be used to create future user tokens.
                $email = $user->getEmail();
                $user->setUsername($email);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                
                $flush = $em->flush();
                
                //Calling to flashbag creation method.
                $this->setRegisterFlashBag($flush);
                
                //Calling to mail alert services.
                $mailNotification = $this->get('MailNotificationGenerator');
                $mailNotification->registerMailAlertAction('*****', $user->getEmail(), $user->getNif());

                return $this->redirectToRoute('homepage_login');
            }
        }
        elseif ($form->isSubmitted() == true && $form -> isValid() == false)
        {   
            // $flashMessage = "Ha ocurrido un error, inténtalo de nuevo";
            // $this->session->getFlashBag()->set('profileEditErr', $flashMessage);
            $validator = $this->get('validator');
            $errors = $validator->validate($user);
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
        return $this->render(
            'Frontend/registration/registerSchool.html.twig',
            array('form' => $form->createView())
        );
    }

    //This method checks if registering user is allowed in FP Emplea
    public function isAllowed($em, $data) {
        $en_id_rep = $em->getRepository("AppBundle:ValidatedUserIds");
        $candidate_nif = $data->getNif();
        try {
            $enabled_id = $en_id_rep->findOneBy(
                array('userId' => $candidate_nif, 'appRole' => 'ROLE_STUDENT')
            );
            return $enabled_id;
        } catch(Exception $e) {
            return 0;
        }
    }
    
    //This method creates a flashbag message to users registration.
    public function setRegisterFlashBag($flush){
        if($flush==null){
            $message="Usario creado correctamente. Por favor, verifica tu correo electrónico para crear tu perfil";
        }else{
            $message="Error al registrar el usuario.";
        }

        $this->session->getFlashBag()->add("register",$message);
    }
    
}
