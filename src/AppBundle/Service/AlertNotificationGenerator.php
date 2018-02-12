<?php
// src/AppBundle/Service/AlertNotificationGenerator.php
namespace AppBundle\Service;

use AppBundle\Entity\Alert;

class AlertNotificationGenerator
{
	protected $templating;
	protected $em;

    public function __construct($templating, $em)
    {
        $this->templating = $templating;
        $this->em = $em;
    }

    // This method is called when a profile is visited by some user
    public function visitorNotificationAlertAction($email, $user, $visitor, $userId)
    {
        $em = $this->em;
        $alert = new Alert();
        
        $subject = '[FP Emplea] el usuario '.$visitor.' ha visitado tu perfil';
        $date = date("Y-m-d h:m:s");
        
        $alert->setUserid($userId);
        $alert->setAlertsubject($subject);
        $alert->setAlertbody(
            $this->templating->render(
                'Emails/profileVisitor.html.twig',
                array('name' => $user,
                      'visitor' => $visitor,
                      'date' => $date
                     )
            ),
            'text/html'
        );
        $alert->setGenerationdate(new \DateTime($date));
        $alert->setStatus(0);

        $em->persist($alert);
        $em->flush();
    }

    // This method is called when an offer is validated
    public function offerCreationAlertAction($user, $userName, $offerTitle, $offerDescription, $company)
    {
        $em = $this->em;
        $alert = new Alert();

        $date = date("Y-m-d h:m:s");
        $subject = 'La empresa '.$company.' ha creado una oferta';
        $body = "La empresa ".$company." ha creado la oferta ".$offerTitle." pensada para alguien con tu perfil";


        $alert->setUserid($user->getIdusuario());
        $alert->setAlertsubject($subject);
        $alert->setAlertbody($body);

        $alert->setGenerationdate(new \DateTime($date));
        $alert->setStatus(0);

        $em->persist($alert);
        $em->flush();
    }

    // This method is called when a job offer applicant is rejected
    public function offerRejectedApplicantAlertAction($user, $company, $offer)
    {
        $em = $this->em;
        $alert = new Alert();
        
        $subject = 'La empresa '.$company.' ha rechazado tu candidatura';
        $date = date("Y-m-d h:m:s");
        $alert->setUserid($user->getIdusuario());
        $alert->setAlertsubject($subject);
        $alert->setAlertbody(
            $this->templating->render(
                'Alerts/applicantRejected.html.twig',
                array('user' => $user,
                      'company' => $company,
                      'date' => $date,
                      'offer' => $offer
                     )
            ),
            'text/html'
        );
        
        $alert->setGenerationdate(new \DateTime($date));
        $alert->setStatus(0);

        $em->persist($alert);
        $em->flush();
    }

    // This method is called when a user have a successful register
    public function registerAlertAction($plainPassword, $mail, $user)
    {
        $em = $this->em;
        $alert = new Alert();

        $subject = '[FP Emplea] Datos de acceso';
        $date = date("Y-m-d h:m:s");
        $alert->setUserid($user);
        $alert->setAlertsubject($subject);
        $alert->setAlertbody(
            $this->templating->render(
                'Alerts/registerAlert.html.twig',
                array('name' => $mail,
                      'password' => $plainPassword
                     )
            ),
            'text/html'
        );
        
        $alert->setGenerationdate(new \DateTime($date));
        $alert->setStatus(0);

        $em->persist($alert);
        $em->flush();
    }

    // This method is called when a user applies to an offer
    public function offerApplyAlertAction($email, $company, $applicant, $offer)
    {
        $em = $this->em;
        $alert = new Alert();
        
        $subject = '[FP Emplea] el usuario '.$applicant.' ha aplicado en tu oferta';
        $date = date("Y-m-d h:m:s");
        
        $alert->setUserid($company->getIdusuario());
        $alert->setAlertsubject($subject);
        $alert->setAlertbody(
            $this->templating->render(
                'Alerts/offerApply.html.twig',
                array('company' => $company,
                      'applicant' => $applicant,
                      'offer' => $offer,
                      'date' => $date
                     )
            ),
            'text/html'
        );
        $alert->setGenerationdate(new \DateTime($date));
        $alert->setStatus(0);

        $em->persist($alert);
        $em->flush();
    }

    // This method is called when some offer is finished
    public function offerClosureAlertAction($schoolProf, $companyProf, $offer)
    {
        $em = $this->em;
        $alert = new Alert();

        $subject = '[FP Emplea] La empresa '.$companyProf->getNombreempresa().' ha cerrdo su oferta';
        $date = date("Y-m-d h:m:s");

        $alert->setUserid($schoolProf->getIdusuario());
        $alert->setAlertsubject($subject);
        $alert->setAlertbody(
            $this->templating->render(
                'Alerts/offerClosure.html.twig',
                array('company' => $companyProf,
                      'offer' => $offer,
                      'school' => $schoolProf
                     )
            ),
            'text/html'
        );

        $alert->setGenerationdate(new \DateTime($date));
        $alert->setStatus(0);

        $em->persist($alert);
        $em->flush();
    }
}