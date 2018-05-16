<?php
// src/AppBundle/Controller/LoginController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Entity\Usuarios;
use AppBundle\Form\UsuariosType;



class LoginController extends Controller
{
    private $session;
    private $token;

    public function __construct() {
        $this->session = new Session();
    }

    public function loginAction(Request $request)
    {
        $authenticationUtils=$this->get("security.authentication_utils");
        $error=$authenticationUtils->getLastAuthenticationError();
        $lastUsername=$authenticationUtils->getLastUsername();

        if( $this->get('security.token_storage')->getToken()->getUser() != 'anon.' )
        {
            $this->session->set('securityToken', uniqid($this->get('security.token_storage')->getToken()->getUser(), true));

            $em = $this->getDoctrine()->getManager();
            $userRep = $em->getRepository('AppBundle:Usuarios');
            $user = $userRep->findOneById($this->get('security.token_storage')->getToken()->getUser()->getId());

            $user->setSecuritytoken($this->session->get('securityToken'));

            $em->persist($user);
            $em -> flush();
            if ( $user->getDone() == 1 ){
                return $this->redirectToRoute('profile', array('idUser' => $user->getId()));
            }
        }

        //FIXME
        return $this->render("Frontend/login/login.html.twig", array(
            "error"=>$error, 
            "last_username"=>$lastUsername, 
            "session" => $this->session,
            "token" => $this->session->get('securityToken'),
            )
        );
    }

    public function login_checkAction(Request $request)
    {
        $message = "Sesión iniciada satisfactoriamente";
        $this->session->getFlashBag()->add("login",$message);
        $this->token = "ready";
    }

    public function logoutAction(Request $request)
    {
        $message = "Sesión cerrada satisfactoriamente";
        $this->session->getFlashBag()->add("logout",$message);
    }

}
