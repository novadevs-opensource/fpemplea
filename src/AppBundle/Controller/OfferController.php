<?php
// src/AppBundle/Controller/OfferController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Entity\Categorias;
use AppBundle\Entity\Ofertas;
use AppBundle\Entity\OfertasHasCategorias;
use AppBundle\Entity\Perfilestudiante;
use AppBundle\Entity\PerfilestudianteHasOfertas;
use AppBundle\Entity\PerfilestudianteHasFormacion;
use AppBundle\Entity\FormacionHasCategorias;
use AppBundle\Entity\SchoolHasOffer;
use AppBundle\Entity\Alert;

use AppBundle\Form\SchoolHasOfferType;
use AppBundle\Form\OfertasType;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class OfferController extends Controller{

    private $session;

    public function __construct() {
        $this->session = new Session();
    }
    
    /**
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_SCHOOL')")
     */
    public function listadoOfertasAction($page)
    {
        $em = $this->getdoctrine()->getManager();
        $pageSize = $this->container->getParameter('records_per_page');

        $offer_rep = $em->getRepository('AppBundle:Ofertas');
        $paginator = $offer_rep->getPaginateOffer($pageSize,$page);
       
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / $pageSize);

        $category_rep = $em->getRepository('AppBundle:Categorias');
        $categories  = $category_rep->findAll();
        
        return $this -> render('Frontend/listado.html.twig', array(
            'res' => $paginator, 
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "current" => $page,
            "categories" => $categories
        ));
    }

    public function offerSearchAction($type, $fieldOne, $fieldTwo)
    {
        $em = $this -> getdoctrine() -> getManager();
        $filterRequest = Request::createFromGlobals();

        if( $filterRequest->query->get('type') )
        {
            $type = $filterRequest->query->get('type');
            $entity = 'Ofertas';

            // Custom repo class
            $repo = $em->getRepository('AppBundle:Ofertas');
            $repoResult = $repo->offerGetResultAndCount($type, $entity, $fieldOne, $fieldTwo);

            list($res) = array_values($repoResult);
            // End custom repo class
        }
        else{
            $repo = $em->getRepository('AppBundle:Ofertas');
            $res = $repo->findAll();
        }

        $category_rep = $em->getRepository('AppBundle:Categorias');
        $categories  = $category_rep->findByIdpadre(null);
        
        return $this -> render('Frontend/searchResult.html.twig', array(
            'res' => $res, 
            'type'=>$type,
            "categories" => $categories
        ));
    }
    
    /**
     * @Route("/ver-oferta/{id}", name="ver_oferta")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_STUDENT') or has_role('ROLE_COMPANY') or has_role('ROLE_SCHOOL')")
     */
    public function verOferta($id)
    {
        $em = $this->getdoctrine()->getManager();
        
        $ofertas_rep = $em->getRepository("AppBundle:Ofertas");
        $oferta = $ofertas_rep->findOneById($id);
        
        $estudiantes_rep = $em->getRepository("AppBundle:Perfilestudiante");
        $estudiante = $ofertas_rep->findAll(array(), array('id' => 'ASC'));
        
        return $this->render('Frontend/verOferta.html.twig', array("oferta" => $oferta, 
                                                                   "estudiante" => $estudiante
                                                                  ));
    }
    
    /**
     * @Route("/crear-oferta/empresa/{idEmpresa}/{id}", name="crear_oferta")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_COMPANY') or has_role('ROLE_SCHOOL')")
     */
    public function crearOfertaAction(Request $request, $idEmpresa, $id)
    {                   
        $em = $this->getDoctrine()->getManager();

        $perfilEmpresa_rep = $em->getRepository("AppBundle:Perfilempresa");
        $empresa = $perfilEmpresa_rep->findOneById($idEmpresa);
        
        $oferta = new Ofertas();

        $form = $this -> createForm(OfertasType::class, $oferta, array(
            'action' => $this->generateUrl('crear_oferta', array('id' => $id, 'idEmpresa' => $idEmpresa),['_fragment' => '#offers']),
        ));
        
        $form->remove('closureExplanation');
        $form->remove('engagement');
        $form->remove('closureReason');
        
        $form -> handleRequest($request);

        $date = date("Y-m-d h:m:s");
        
        if ($form -> isSubmitted() && $form -> isValid()) 
        {
            $oferta = $form -> getData();
            $oferta->setFechacreacion($date);
            $oferta->setIdempresa($empresa);
            $oferta->setActive(1);
            $oferta->setInscribed(0);

            $em -> persist($oferta);
            $em -> flush();

            $values = array();

            $adminUrl = $this->generateUrl('offer_admin', array('id' => $oferta->getId()));

            $values['result'] = 'OK';
            $values['route'] = $adminUrl;


            // $flashMessage = "Tu oferta se ha creado correctamente";
            // $info = "Debes asignar tu oferta a un centro haciendo click en el boton ".'"Gestionar"';
            // $this->session->getFlashBag()->set('offerSucc', $flashMessage);
            // $this->session->getFlashBag()->set('info', $info);

            $response = new Response();
            $response->setContent(json_encode(array(
                'data' => $values
            )));
            $response->headers->set('Content-Type', 'application/json');
            return $response;

        } else{
            $validator = $this->get('validator');
            $errors = $validator->validate($oferta);
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
                    'data' => $errorsString,
                )));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }
        }
        return $this->render('Frontend/profile/createOffer.html.twig', array(
            'form' => $form->createView(), 'empresa' => $empresa));
    }
    
    /**
     * @Route("/modificar-oferta/{id}", name="modificar_oferta")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_COMPANY')")
     */
    public function modificarOfertaAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $offer_rep = $em->getRepository("AppBundle:Ofertas");
        $offer = $offer_rep->findOneById($id);
        
        $form = $this->createForm(OfertasType::class, $offer, array(
            'action' => $this->generateUrl('modificar_oferta', array(
              'id' => $offer->getId())
            ))
        );

        // To get user id and then use it at url redirect
        $company = $offer->getIdempresa();
        $company = $company->getIdusuario();

        $form->remove('closureExplanation');
        $form->remove('closureReason');
        $form->remove('engagement');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $offer = $form -> getData();
            $offer->setValidated(0);
            $em -> persist($offer);
            $em -> flush();

            return $this->redirectToRoute('profile', array(
              'idUser' => $company->getId()
              ));
        }

        $flashMessage = "Tu oferta se ha guardado correctamente";
        $this->session->getFlashBag()->set('offerSucc', $flashMessage);

        return $this->render('Frontend/profile/crudOferta.html.twig', array(
            'form' => $form->createView(),
            ));
    }

    /**
     * @Route("/gestionar-oferta/{id}", name="offer_admin")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_COMPANY')")
     */
    public function offerAdminAction($id)
    {
      $em = $this->getdoctrine()->getManager();
        
      $offer_rep = $em->getRepository("AppBundle:Ofertas");
      $offer = $offer_rep->findOneById($id);

      $date = date("Y-m-d h:m:s");
      $offer->setFecharevision($date);
      $em->persist($offer);
      $em->flush();

      $poRelation_rep = $em->getRepository("AppBundle:PerfilestudianteHasOfertas");
      $poRelation = $poRelation_rep->findByOfertasid($offer);

      $soRelation_rep = $em->getRepository("AppBundle:SchoolHasOffer");
      $soRelation = $soRelation_rep->findByOffer($offer);

      $applicants = $poRelation;

      return $this->render('Frontend/offerAdmin.html.twig', array(
        "offer" => $offer, 
        "applicants" => $poRelation,
        "schools" => $soRelation
        ));
    }

    /**
     * @Route("/asignar-oferta/{id}", name="offerAdminAssign")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_COMPANY')")
     */
    public function offerAdminAssignAction(Request $request, $id)
    {
        $em = $this->getdoctrine()->getManager();
        $session = $request->getSession();

        $offer_rep = $em->getRepository("AppBundle:Ofertas");
        $offer = $offer_rep->findOneById($id);
        $companyProf = $offer->getIdempresa();

        $soRelation = new SchoolHasOffer();

        $form = $this->createForm(SchoolHasOfferType::class, $soRelation, array(
              'action' => $this->generateUrl('offerAdminAssign', array(
                'id' => $id,
                ['_fragment' => '#offers']
                ))
              )
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
          $soRelation = $form -> getData();
          $soRelation->setOffer($offer);

          $checkIfExists_rep = $em->getRepository("AppBundle:SchoolHasOffer");
          $checkIfExists = $checkIfExists_rep->findBySchool($soRelation->getSchool());
          $school = $soRelation->getSchool();

          foreach ($checkIfExists as $check) 
          {
            if($check->getOffer()->getId() == $soRelation->getOffer()->getId())
            {
              $message = "ERROR. Lo sentimos pero ya has hecho esa asignación";
              $this->get('session')->getFlashBag()->add("offerAssignError",$message);
              
              return $this->redirectToRoute('offer_admin', array(
                'id' => $id,
              ));
            } 
          }

          $message = "Oferta asignada correctamente al centro de estudios";
          $this->get('session')->getFlashBag()->add("offerAssignSuccess",$message);
          $em->persist($soRelation);
          $em->flush();
          //Creating alert and sendig email
          $alertNotification = $this->get('AlertNotificationGenerator');
          $alertNotification->offerAssignAlertAction($school, $companyProf, $offer);
              
          $mailNotification = $this->get('MailNotificationGenerator');          
          if( $school->getId() !== null ) {
            $mailNotification->offerAssignMailAlertAction($school->getEmail(), $school, $companyProf, $offer);
          }

          return $this->redirectToRoute('offer_admin', array(
            'id' => $id,
          ));
        }
        return $this->render('Frontend/profile/assignOffer.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/borrar-asignar-oferta/{idRel}/{id}", name="offerAdminDelAssign")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_COMPANY')")
     */
    public function offerAdminDelAssignAction($idRel, $id)
    {
        $em = $this->getDoctrine()->getManager(); 

        $soRelation_rep = $em->getRepository("AppBundle:SchoolHasOffer");
        $soRelation = $soRelation_rep->findOneById($idRel);  

        $em->remove($soRelation);
        $em->flush();

        $message = "Asignación borrada correctamente";
        $this->get('session')->getFlashBag()->add("offerAssignSuccess",$message);

        return $this->redirectToRoute('offer_admin', array(
            'id' => $id,
        ));
    }

    /**
     * @Route("/cerrar-oferta/{id}", name="close_offer")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_COMPANY')")
     */
    public function closeOfferAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $offer_rep = $em->getRepository("AppBundle:Ofertas");
        $offers = $offer_rep->findAll();
        $offer = $offer_rep->findOneById($id);

        $soRelation_rep = $em->getRepository("AppBundle:SchoolHasOffer");
        $soRelation = $soRelation_rep->findByOffer($offer->getId());

        $mailNotification = $this->get('MailNotificationGenerator');
        $alertNotification = $this->get('AlertNotificationGenerator');

        $form = $this->createForm(OfertasType::class, $offer, array(
            'action' => $this->generateUrl('close_offer', array(
              'id' => $id
            ))
        ));

        $company = $offer->getIdempresa();
        $company = $company->getIdusuario();

        $form->remove('title');
        $form->remove('fechacreacion');
        $form->remove('tipo');
        $form->remove('fechainicio');
        $form->remove('fechafin');
        $form->remove('vacancies');
        $form->remove('categoria');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $date = date("Y-m-d h:m:s");

            $offer = $form -> getData();
            
            $offer->setClosureReason($offer->getClosureReason());
            $offer->setClosureExplanation($offer->getClosureExplanation());
            $offer->setFechaborrado($date);
            $offer->setFinished(1);
            $em -> persist($offer);
            $em -> flush();
            foreach ($soRelation as $so) 
            {
              $school_rep = $em->getRepository("AppBundle:Centroestudios");
              $schoolMail = $school_rep->findOneById($so->getSchool()->getId())->getEmail();
              $schoolProf = $school_rep->findOneById($so->getSchool()->getId());

              $company_rep = $em->getRepository("AppBundle:Perfilempresa");
              $companyProf = $company_rep->findOneById($offer->getIdempresa());
              //Creating alert and sendig email
              $alertNotification->offerClosureAlertAction($schoolProf, $companyProf, $offer);
              if(isset($schoolMail))
              {
                $mailNotification->offerClosureMailAlertAction($schoolMail, $schoolProf, $companyProf, $offer);
              }
            }
            
            return $this->redirectToRoute('profile', array(
              'idUser' => $company->getId()
              ));
        }

        return $this->render('Frontend/profile/closeOffer.html.twig', array(
            'form' => $form->createView(),
            'rel' => $soRelation,
            ));
    }
    
    /**
     * @Route("/borrar-aspirante/{id}", name="deleteApplicant")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_COMPANY')")
     */
    public function applicantRejectAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $poRelation_rep = $em->getRepository("AppBundle:PerfilestudianteHasOfertas");

        $poRelation=$poRelation_rep->findOneById($id);
        $date = date("Y-m-d h:m:s");

        $poRelation->setStatus(0);
        $poRelation->setModified(new \DateTime($date));

        //BLOCK send alert
        $offer = $poRelation->getOfertasid();
        $offer_rep = $em->getRepository("AppBundle:Ofertas");
        $offer = $offer_rep->findOneById($offer);
        
        $u = $poRelation->getPerfilestudianteid();
        $u_rep = $em->getRepository("AppBundle:Perfilestudiante");
        $u = $u_rep->findOneById($u);

        // $company = $poRelation->getOfertasid();
        $company_rep = $em->getRepository("AppBundle:Perfilempresa");
        $company = $company_rep->findOneById($offer->getIdempresa());
        //Creating alert and sendig email
        if($u->getEmail())
        {
          $mailNotification = $this->get('MailNotificationGenerator');
          $mailNotification->offerRejectedApplicantMailAlertAction(
            $u->getEmail(), 
            $u->getNombre(), 
            $offer->getTitle(), 
            $offer->getDescripcion(), 
            $company
          );
        }
        $alertNotification = $this->get('AlertNotificationGenerator');
        $alertNotification->offerRejectedApplicantAlertAction(
            $u, 
            $company,
            $offer
          );

        $flush=$em->flush();
        
        return $this->redirectToRoute('homepage');
    }
    
    /**
     * @Route("/ofertas-centro/{idProf}", name="list_school_offer")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_SCHOOL')")
     */
    public function schoolOfferListAction($idProf)
    {
        $em = $this -> getdoctrine() -> getManager();
        
        $school_rep = $em -> getRepository("AppBundle:Centroestudios");
        $school = $school_rep -> findOneById($idProf);

        $soRelation_rep = $em->getRepository("AppBundle:SchoolHasOffer");
        $soRelation = $soRelation_rep->findBySchool($school->getId());

        return $this->render('Frontend/profile/schoolOfferList.html.twig', 
          array("offers" => $soRelation
          ));
    }

    /**
     * @Route("/rechazar-oferta/{id}/{idUser}", name="discard_offer")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_SCHOOL')")
     */
    public function discardOfferAction($id, $idUser)
    {
        $em = $this->getDoctrine()->getManager();

        $school_rep = $em->getRepository("AppBundle:Centroestudios");
        $school = $school_rep->findOneByIdusuario($idUser);

        $soRelation_rep = $em->getRepository("AppBundle:SchoolHasOffer");
        $soRelation = $soRelation_rep->findOneByOffer($id);

        $schoolCheck = $soRelation->getSchool();

        $offer_rep = $em->getRepository("AppBundle:Ofertas");
        $offer = $offer_rep->findOneById($id);

        if(($soRelation->getOffer() == $offer) && ($school == $schoolCheck))
        {
          $offer->setActive(0);
          $offer->setValidated(0);
          $em->persist($offer);
          $em->flush();

          $em->remove($soRelation);
          $em->flush();
          
          $success = "Oferta descartada con éxito";
          //$this->get('session')->getFlashBag()->add("offerValidatedSuccess",$success);

          return $this -> redirectToRoute('profile', array('idUser' => $idUser));
        }
        else
        {
          $error = "Ha ocurrido un problema, contacte con el administrador de la aplicación";
          //$this->get('session')->getFlashBag()->add("offerValidatedError",$error);

          return $this -> redirectToRoute('profile', array('idUser' => $idUser));
        }
    }

    /**
     * @Route("/validar-oferta/{id}/{idUser}", name="validate_offer")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_SCHOOL')")
     */
    public function validateOfferAction($id, $idUser)
    {
        $em = $this->getDoctrine()->getManager();

        $soRelation_rep = $em->getRepository("AppBundle:SchoolHasOffer");
        $soRelation = $soRelation_rep->findOneById($id);

        $schoolCheck = $soRelation->getSchool();

        $school_rep = $em->getRepository("AppBundle:Centroestudios");
        $school = $school_rep->findOneByIdusuario($schoolCheck->getIdusuario());

        $offer_rep = $em->getRepository("AppBundle:Ofertas");
        $offer = $offer_rep->findOneById($soRelation->getOffer());

        if(($soRelation->getOffer() == $offer) && ($school == $schoolCheck))
        {
          $offer->setValidated(1);
          $offer->setActive(1);
          $em->persist($offer);
          $em->flush();

          $success = "Oferta validada con éxito";
          $this->get('session')->getFlashBag()->add("offerValidatedSuccess",$success);

          // Common category retriever begins
          try {
            $education_repo = $em->getRepository("AppBundle:Formacion");
            $education = $education_repo->findByFamiliaprof($offer->getCategoria());

            $users_repo = $em->getRepository("AppBundle:PerfilestudianteHasFormacion");
            $users =  $users_repo->findByFormacion($education);
            
            for ($i = 0; $i < count($users); $i++ )
            {
              $users[$i] = $users[$i]->getPerfilestudiante();
            }
          // Common category retriever ends
            foreach ($users as $u)
            {
                if($u->getEmail())
                {
                  $mailNotification = $this->get('MailNotificationGenerator');
                  $mailNotification->offerCreationMailAlertAction(
                      $u->getEmail(), 
                      $u->getNombre(), 
                      $offer->getTitle(), 
                      $offer->getDescripcion(), 
                      $offer->getIdempresa()->getNombreEmpresa()
                    );
                }
                $alertNotification = $this->get('AlertNotificationGenerator');
                $alertNotification->offerCreationAlertAction(
                      $u, 
                      $u->getNombre(), 
                      $offer->getTitle(), 
                      $offer->getDescripcion(), 
                      $offer->getIdempresa()->getNombreEmpresa()
                    );
            }
            return $this -> redirectToRoute('profile', array('idUser' => $idUser.'#offers'));
          } catch (Exception $e) {
            $error = "Ha ocurrido un problema, contacte con el administrador de la aplicación";
            $this->get('session')->getFlashBag()->add("offerValidatedError",$error);

            return $this -> redirectToRoute('profile', array('idUser' => $idUser)); 
          }
        }
        else
        {
          $error = "Ha ocurrido un problema, contacte con el administrador de la aplicación";
          $this->get('session')->getFlashBag()->add("offerValidatedError",$error);

          return $this -> redirectToRoute('profile', array('idUser' => $idUser));
        }
    }
} 
