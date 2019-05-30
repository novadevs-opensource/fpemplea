<?php
// src/AppBundle/Controller/TrainingController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

use AppBundle\Entity\Categorias;
use AppBundle\Entity\Centroestudios;
use AppBundle\Entity\Perfilestudiante;
use AppBundle\Entity\Formacion;
use AppBundle\Entity\FormacionHasCategorias;
use AppBundle\Entity\FormacionHasCentroestudios;
use AppBundle\Entity\PerfilestudianteHasFormacion;
use AppBundle\Entity\PerfilestudianteHasCentroestudios;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Form\PerfilestudianteHasFormacionType;
use AppBundle\Form\FormacionType;

use Symfony\Component\HttpFoundation\Response;

// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class EducationController extends Controller
{
    private $session;

    public function __construct() {
        $this->session = new Session();
    }
    
    /**
     * @Route("/listado-formacion/{idSchool}", name="school_list_education")
     */
    public function schoolEducationListAction($idSchool)
    {
        $em = $this->getdoctrine()->getManager();
        
        $school_rep = $em->getRepository("AppBundle:Centroestudios");
        $school = $school_rep->findOneById($idSchool);
        
        $fcRelation_rep = $em ->getRepository("AppBundle:FormacionHasCentroestudios");
        $education = $fcRelation_rep->findByCentroestudios($school->getId());

        return $this->render('Frontend/schoolEducationList.html.twig', array("education" => $education));
    }
    
    /**
     * @Route("/mi-formacion/{idApplicant}", name="applicant_list_education")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_COMPANY') or has_role('ROLE_SCHOOL')")
     */
    public function educationApplicantListAction($idApplicant)
    {
        $em = $this->getdoctrine()->getManager();
        
        $applicant_rep = $em->getRepository("AppBundle:Perfilestudiante");
        $applicant = $applicant_rep->findOneById($idApplicant);
        
        $pfRelation_rep = $em->getRepository("AppBundle:PerfilestudianteHasFormacion");
        $education = $pfRelation_rep->findByPerfilestudiante($applicant->getId(), array('start' => 'ASC'));

        // $delPath = $this->generateUrl('applicant_delete_education', array(
        //         'id' => $education->getId(), 
        //         'idUser' => $applicant->getIdUsuario()->getId()
        //     )
        // );

        return $this -> render('Frontend/misCursosAspirante.html.twig', array(
            "education" => $education,
            // "rel" => $delPath
            )
        );
    }
    
    /**
     * @Route("/crear-formacion/{idSchool}/{id}", name="create_education")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_SCHOOL')")
     */
    public function educationAddAction(Request $request, $idSchool, $id)
    {                   
        $em = $this->getDoctrine()->getManager();

        $fcRelation = new FormacionHasCentroestudios();

        $school_rep = $em -> getRepository("AppBundle:Centroestudios");
        $school = $school_rep->findOneById($idSchool);

        //$education_rep = $em->getRepository("AppBundle:Formacion");
        //$education = $education_rep->findAll();

        $form = $this->createFormBuilder($fcRelation)
            ->setAction($this->generateUrl('create_education', array('idSchool' => $idSchool, 'id' => $id)))
            ->add('id', EntityType::class, array(
                    'class' => 'AppBundle:Formacion',
                    'label' => 'Título',
                    'choice_label' => 'titulo',
                    'choice_value' => 'id',
                    'expanded' => false,
                    'multiple' => false,
                    'placeholder' => 'Título',
                    'attr' =>array('class' => '')
                ))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $education = $form['id']->getData();
            $fcRelation= $form->getData();

            $fcRelation->setCentroestudios($school);
            $fcRelation->setFormacion($education);

            $em->persist($fcRelation);
            
            try {
                $em->flush();
            } catch (UniqueConstraintViolationException $e) {
                $res['error'] = 'Duplicate entry: "Unique Constraint Violation Exception". Value: '.$education->getTitulo();
                $response = new Response();
                $response->setContent(json_encode(array(
                    'data' => $res,
                )));
                $response->headers->set('Content-Type', 'application/json');
                return $response;   
            }
            $res['result'] = 'OK';
            $res['edTitle'] = $education->getTitulo();
            $res['edCategory'] = $education->getFamiliaprof()->getNombre();
            $res['id'] = $fcRelation->getId();
            $res['userId'] = $school->getIdUsuario()->getId();
            $res['delPath'] = $this->generateUrl('school_delete_education', array(
                    'id' => $fcRelation->getId(), 
                    'idUser' => $school->getIdUsuario()->getId()
                )
            );
            $response = new Response();
            $response->setContent(json_encode(array(
                'data' => $res,
            )));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
            // $addMsg="Formación añadida correctamente.";
            // $this->session->getFlashBag()->add('educationAdd',$addMsg);

            // return $this->redirectToRoute('profile', array('idUser' => $id));
        }
        else
        {
            $validator = $this->get('validator');
            $errors = $validator->validate($fcRelation);
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

        return $this->render('Frontend/profile/crudFormacion.html.twig', array(
            'form' => $form->createView(), 'school' => $school));
    }

    /**
     * @Route("/eliminar-mi-formacion-centro/{id}/{idUser}", name="school_delete_education")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_SCHOOL')")
     */
    public function educationSchoolDeleteAction($id, $idUser)
    {
        $em = $this -> getdoctrine() -> getManager();
        
        $fcRelation_rep = $em ->getRepository("AppBundle:FormacionHasCentroestudios");
        $education = $fcRelation_rep -> findOneById($id);

        $em->remove($education);
        $flush=$em->flush();

        if(null != $education->getId()){
            $failure="Error al eliminar la formación";
            $this->session->getFlashBag()->add('educationErr', $failure);
        }else{
            $delMsg="Formación eliminada satisfactoriamente";
            $this->session->getFlashBag()->add('educationDel', $delMsg);
        }
       
       
        return $this -> redirectToRoute('profile', array('idUser' => $idUser));
    }

    /**
     * @Route("/eliminar-mi-formacion/{id}/{idUser}", name="applicant_delete_education")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_SCHOOL')")
     */
    public function educationDeleteAction($id, $idUser)
    {
        $em = $this -> getdoctrine() -> getManager();
        
        $pfRelation_rep = $em ->getRepository("AppBundle:PerfilestudianteHasFormacion");
        $education = $pfRelation_rep -> findOneById($id);

        $em->remove($education);
        $flush=$em->flush();

        if(null != $education->getId()){
            $failure="Error al eliminar la formación";
            $this->session->getFlashBag()->add('educationErr', $failure);
        }else{
            $delMsg="Formación eliminada satisfactoriamente";
            $this->session->getFlashBag()->add('educationDel', $delMsg);
        }
       
        return $this -> redirectToRoute('profile', array('idUser' => $idUser));
    }
    
    /**
     * @Route("/editar-formacion-candidato/{idApplicant}/{id}", name="applicant_add_education")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT')")
     */
    public function applicantEducationAddAction(Request $request, $idApplicant, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $relation = new PerfilestudianteHasFormacion();
        $pcRelation = new PerfilestudianteHasCentroestudios();

        $form = $this->createForm(PerfilestudianteHasFormacionType::class, $relation, array(
            'action' => $this->generateUrl('applicant_add_education', array('idApplicant' => $idApplicant, 'id' => $id))
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $applicant_rep = $em->getRepository("AppBundle:Perfilestudiante");
            $applicant = $applicant_rep->findOneById($idApplicant);

            $relation = $form->getData();
            $relation->setPerfilestudiante($applicant);

            $em->persist($relation);
            $em->flush();

            $pcRelation->setCentroestudios($relation->getSchool());
            $pcRelation->setPerfilestudiante($applicant);

            $em->persist($pcRelation);
            $em->flush();
            $res['relId'] = $relation->getId();
            $res['userId'] = $applicant->getIdUsuario()->getId();
            $res['delPath']= $this->generateUrl('applicant_delete_education', array(
                    'id' => $relation->getId(), 
                    'idUser' => $applicant->getIdUsuario()->getId()
                )
            );
            $res['category'] = $relation->getFormacion()->getFamiliaprof()->getNombre();
            // echo "<pre>";
            // print_r($res);
            $response = new Response();
            $response->setContent(json_encode(array(
                'data' => $res,
            )));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
        else
        {   //FIXME
            //$failure="Error al añadir la formación";
            //$this->session->getFlashBag()->add('education',$failure);
            $validator = $this->get('validator');
            $errors = $validator->validate($relation);
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

        return $this->render('Frontend/profile/crudApplicantEducation.html.twig', array(
            'form' => $form->createView()));
    }    
}