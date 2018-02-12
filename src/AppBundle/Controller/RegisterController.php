<?php
// src/AppBundle/Controller/RegistrationController.php
namespace AppBundle\Controller;

use AppBundle\Form\UsuariosType;
use AppBundle\Entity\Usuarios;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

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
        $user = new Usuarios();
        $form = $this->createForm(UsuariosType::class, $user, array(
            'action' => $this->generateUrl('applicant_registration'),
        ));

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
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
            $mailNotification->registerMailAlertAction('*****', $user->getEmail());

            return $this->redirectToRoute('homepage_login');
        }
        elseif ($form->isSubmitted() == true && $form -> isValid() == false)
        {   
            $flashMessage = "Ha ocurrido un error, inténtalo de nuevo";
            $this->session->getFlashBag()->set('registerErr', $flashMessage);
            
            return $this->render(
                'Frontend/registration/registerApplicantFromErr.html.twig',
                array('form' => $form->createView())
            );
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
            $mailNotification->registerMailAlertAction('*****', $user->getEmail());

            return $this->redirectToRoute('homepage_login');
        }
        elseif ($form->isSubmitted() == true && $form -> isValid() == false)
        {   
            $flashMessage = "Ha ocurrido un error, inténtalo de nuevo";
            $this->session->getFlashBag()->set('registerErr', $flashMessage);
            
            return $this->render(
                'Frontend/registration/registerCompanyFromErr.html.twig',
                array('form' => $form->createView())
            );

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
            $mailNotification->registerMailAlertAction('*****', $user->getEmail());
            
            return $this->redirectToRoute('homepage_login');
        }

        return $this->render(
            'Frontend/registration/registerSchool.html.twig',
            array('form' => $form->createView())
        );
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