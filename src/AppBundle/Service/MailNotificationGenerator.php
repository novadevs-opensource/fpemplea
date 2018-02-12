<?php
// src/AppBundle/Service/MailNotificationGenerator.php
namespace AppBundle\Service;

class MailNotificationGenerator
{
	protected $mailer;
	protected $templating;

    public function __construct($mailer, $templating)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
    }

    // This method is called when a profile is visited by some user
	public function visitorMailAlertAction($email, $user, $visitor)
    {
        $systemName = "[FP Emplea] Alguien ha visitado tu perfil";
        $message = \Swift_Message::newInstance()
        ->setSubject($systemName.'!Hola '.$user.'!')
        ->setFrom('sistema@fpemplea.com')
        ->setTo($email)
        ->setBody(
            $this->templating->render(
                'Emails/profileVisitor.html.twig',
                array('name' => $user,
                      'visitor' => $visitor
                )
            ),
            'text/html'
        );
        $this->mailer->send($message);
        return true;
    }

    // This method is called when an offer is validated
    public function offerCreationMailAlertAction($email, $user, $offerTitle, $offerDescription, $company)
    {
        $systemName = "[FP Emplea][Nueva Oferta]";
        $message = \Swift_Message::newInstance()
        ->setSubject($systemName.'!Hola '.$user.'!')
        ->setFrom('sistema@fpemplea.com')
        ->setTo($email)
        ->setBody(
            $this->templating->render(
                'Emails/offerCreation.html.twig',
                array('name' => $user,
                      'offerTitle' => $offerTitle,
                      'offerDescription' => $offerDescription,
                      'company' => $company
                     )
            ),
            'text/html'
        );
        $this->mailer->send($message);
        return true;
    }

    // This method is called when a jobb offer aplicant is rejected
    public function offerRejectedApplicantMailAlertAction($email, $user, $offerTitle, $offerDescription, $company)
    {
        $systemName = "[FP Emplea][La próxima vez será]";
        $message = \Swift_Message::newInstance()
        ->setSubject($systemName.'!Hola '.$user.'!')
        ->setFrom('sistema@fpemplea.com')
        ->setTo($email)
        ->setBody(
            $this->templating->render(
                'Emails/applicantRejected.html.twig',
                array('name' => $user,
                      'offerTitle' => $offerTitle,
                      'offerDescription' => $offerDescription,
                      'company' => $company
                     )
            ),
            'text/html'
        );
        $this->mailer->send($message);
        return true;
    }

    // This method is called when a user have a successful register
    public function registerMailAlertAction($plainPassword, $mail){
        
        $systemName = "[FP Emplea]";
        $message = \Swift_Message::newInstance()
        ->setSubject($systemName.'!Hola '.$mail.'!')
        ->setFrom('sistema@fpemplea.com')
        ->setTo($mail)
        ->setBody(
            $this->templating->render(
                'Emails/registration.html.twig',
                array('name' => $mail,
                      'password' => $plainPassword
                     )
            ),
            'text/html'
        );
        
        $this->mailer->send($message);
        return true;
    }

    // This method is called when a user applies to an offer
    public function offerApplyMailAlertAction($email, $company, $applicant, $offer)
    {
        $systemName = "[FP Emplea]";
        $message = \Swift_Message::newInstance()
        ->setSubject($systemName.'!Hola '.$company->getNombreempresa().'!')
        ->setFrom('sistema@fpemplea.com')
        ->setTo($email)
        ->setBody(
            $this->templating->render(
                'Emails/offerApply.html.twig',
                array('company' => $company,
                      'applicant' => $applicant,
                      'offer' => $offer
                     )
            ),
            'text/html'
        );
        
        $this->mailer->send($message);
        return true;
    }

    // This method is called when some offer is finished
    public function offerClosureMailAlertAction($schoolMail, $schoolProf, $companyProf, $offer)
    {
    	$systemName = "[FP Emplea]";
        $message = \Swift_Message::newInstance()
        ->setSubject($systemName.'La empresa '. $companyProf->getNombreempresa() .' ha finalizado una oferta')
        ->setFrom('sistema@fpemplea.com')
        ->setTo($schoolMail)
        ->setBody(
            $this->templating->render(
                'Emails/offerClosure.html.twig',
                array('company' => $companyProf,
                      'offer' => $offer,
                      'school' => $schoolProf
                     )
            ),
            'text/html'
        );
        
        $this->mailer->send($message);
        return true;
    }

}