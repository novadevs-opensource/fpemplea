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
use AppBundle\Controller\EntityRepository;

use AppBundle\Form\ApplicantHasSkillType;
use AppBundle\Form\OfertasType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

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
            try {
                $asRelation = $form->getData();
                $asRelation->setApplicant($applicant);
                $em->persist($asRelation);
                $em->flush();

                $res['code'] = "OK";
                $res['category'] = $asRelation->getSkill()->getSkillCategory()->getId();
                $res['id'] = $asRelation->getId();
                $res['userId'] = $asRelation->getApplicant()->getIdusuario()->getId();
                $res['delPath'] = $this->generateUrl('applicant_delete_skill', array(
                        'id' => $asRelation->getId(), 
                        'idUser' => $asRelation->getApplicant()->getIdusuario()->getId()
                    )
                );
            } catch( \Doctrine\DBAL\Exception\UniqueConstraintViolationException $e){
                $res['code'] = "Duplicated skill";
                $res['error'] = $e->getMessage();
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
     * @Route("/editar-competencias-personales-candidato/{idApplicant}/{id}", name="applicant_add_personal_skill")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT')")
     */
    public function applicantPersonalSkillAddAction(Request $request, $idApplicant, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $asRelation = new ApplicantHasSkill();

        $form = $this->createFormBuilder($asRelation)
            ->setAction($this->generateUrl('applicant_add_personal_skill', array('idApplicant' => $idApplicant, 'id' => $id)))
            ->add('skill', EntityType::class, array(
                'class'         => 'AppBundle:Skill',
                'label'         => 'Competencia Personal',
                'query_builder' => function ($em) {
                                        return $em->createQueryBuilder('u')->where('u.skillCategory = 2');
                                    },
                'choice_label'  => 'skill',
                'choice_value'  => 'id',
                'expanded'      => false,
                'multiple'      => false,
                'attr'          =>array('class' => '')
            ))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $applicant_rep = $em->getRepository("AppBundle:Perfilestudiante");
            $applicant = $applicant_rep->findOneById($idApplicant);
            try {
                $asRelation = $form->getData();
                $asRelation->setApplicant($applicant);
                $em->persist($asRelation);
                $em->flush();

                $res['code'] = "OK";
                $res['category'] = $asRelation->getSkill()->getSkillCategory()->getId();
                $res['id'] = $asRelation->getId();
                $res['userId'] = $asRelation->getApplicant()->getIdusuario()->getId();
                $res['delPath'] = $this->generateUrl('applicant_delete_skill', array(
                        'id' => $asRelation->getId(), 
                        'idUser' => $asRelation->getApplicant()->getIdusuario()->getId()
                    )
                );
            } catch( \Doctrine\DBAL\Exception\UniqueConstraintViolationException $e){
                $res['code'] = "Duplicated skill";
                $res['error'] = $e->getMessage();
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

        return $this->render('Frontend/profile/crudApplicantPersonalSkill.html.twig', array(
            'form' => $form->createView()));
    }

    /**
     * @Route("/editar-competencias-comunes-candidato/{idApplicant}/{id}", name="applicant_add_common_skill")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT')")
     */
    public function applicantCommonSkillAddAction(Request $request, $idApplicant, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $asRelation = new ApplicantHasSkill();

        $form = $this->createFormBuilder($asRelation)
            ->setAction($this->generateUrl('applicant_add_common_skill', array('idApplicant' => $idApplicant, 'id' => $id)))
            ->add('skill', EntityType::class, array(
                'class'         => 'AppBundle:Skill',
                'label'         => 'Competencia Común',
                'query_builder' => function ($em) {
                                        return $em->createQueryBuilder('u')->where('u.skillCategory = 3');
                                    },
                'choice_label'  => 'skill',
                'choice_value'  => 'id',
                'expanded'      => false,
                'multiple'      => false,
                'attr'          =>array('class' => '')
            ))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $applicant_rep = $em->getRepository("AppBundle:Perfilestudiante");
            $applicant = $applicant_rep->findOneById($idApplicant);
            try {
                $asRelation = $form->getData();
                $asRelation->setApplicant($applicant);
                $em->persist($asRelation);
                $em->flush();

                $res['code'] = "OK";
                $res['category'] = $asRelation->getSkill()->getSkillCategory()->getId();
                $res['id'] = $asRelation->getId();
                $res['userId'] = $asRelation->getApplicant()->getIdusuario()->getId();
                $res['delPath'] = $this->generateUrl('applicant_delete_skill', array(
                        'id' => $asRelation->getId(), 
                        'idUser' => $asRelation->getApplicant()->getIdusuario()->getId()
                    )
                );
            } catch( \Doctrine\DBAL\Exception\UniqueConstraintViolationException $e){
                $res['code'] = "Duplicated skill";
                $res['error'] = $e->getMessage();
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

        return $this->render('Frontend/profile/crudApplicantCommonSkill.html.twig', array(
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