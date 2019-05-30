<?php
// src/AppBundle/Service/ContactMailGenerator.php
namespace AppBundle\Service;

class ContactMailGenerator
{
	protected $mailer;

	public function __construct($mailer)
    {
        $this->mailer = $mailer;
    }

    // This method is called when a profile is visited by some user
	public function ContactMailAction($email, $user, $body, $subject, $senderMail)
    {
        $systemName = "[FP Emplea]";
        $message = \Swift_Message::newInstance()
        ->setSubject($systemName . '['. $senderMail .' Ha contactado contigo!] ' . $subject)
        ->setFrom('sistema@fpemplea.com')
        ->setTo($email)
        ->setBody($body);
        $this->mailer->send($message);
        return true;
    }
}