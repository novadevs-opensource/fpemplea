<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Entity\Skill;
use AppBundle\Entity\Perfilestudiante;
use AppBundle\Entity\ApplicantHasSkill;

use AppBundle\Form\ApplicantHasSkillType;
use AppBundle\Form\OfertasType;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class SkillController extends Controller
{
    private $session;

    public function __construct() {
        $this->session=new Session();
    }
	
    /**
     * @Route("/mis-competencias/{idApplicant}", name="applicant_list_skill")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_COMPANY') or has_role('ROLE_SCHOOL')")
     */
    public function applicantSkillListAction($idApplicant)
    {
        $em = $this->getdoctrine()->getManager();
        
        $applicant_rep = $em->getRepository("AppBundle:Perfilestudiante");
        $applicant = $applicant_rep->findOneById($idApplicant);
        
        $asRelation_rep = $em->getRepository("AppBundle:ApplicantHasSkill");
        $skills = $asRelation_rep->findByApplicant($applicant->getId());

        return $this -> render('Frontend/applicantSkillList.html.twig', array("skills" => $skills));
    }

    /**
     * @Route("/editar-competencias-candidato/{idApplicant}/{id}", name="applicant_add_skill")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT')")
     */
    public function applicantSkillAddAction(Request $request, $idApplicant, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $asRelation = new ApplicantHasSkill();

        $form = $this->createForm(ApplicantHasSkillType::class, $asRelation, array(
            'action' => $this->generateUrl('applicant_add_skill', array('idApplicant' => $idApplicant, 'id' => $id))
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $applicant_rep = $em->getRepository("AppBundle:Perfilestudiante");
            $applicant = $applicant_rep->findOneById($idApplicant);

            $asRelation = $form->getData();
            $asRelation->setApplicant($applicant);
            $em->persist($asRelation);
            $em->flush();

            // $flashMessage = "Tus cambios se han guardado satisfactoriamente";
            // $this->session->getFlashBag()->set('profileEditSucc', $flashMessage);

            // return $this->redirectToRoute('profile', array('idUser' => $id));
            $response = new Response();
            $response->setContent(json_encode(array(
                'data' => $asRelation,
            )));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
        elseif ($form->isSubmitted() == true && $form -> isValid() == false)
        {   
            $validator = $this->get('validator');
            $errors = $validator->validate($asRelation);
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

        return $this->render('Frontend/profile/crudApplicantSkill.html.twig', array(
            'form' => $form->createView()));
    }

    /**
     * @Route("/eliminar-mi-skill/{id}/{idUser}", name="applicant_delete_skill")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_SCHOOL')")
     */
    public function applicantDeleteSkillAction($id, $idUser)
    {
        $em = $this -> getdoctrine() -> getManager();
        
        $asRelation_rep = $em ->getRepository("AppBundle:ApplicantHasSkill");
        $skill = $asRelation_rep -> findOneById($id);

        $em->remove($skill);
        $flush=$em->flush();

        $response = new Response();
        $response->setContent(json_encode(array(
            'data' => 'OK',
        )));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


}