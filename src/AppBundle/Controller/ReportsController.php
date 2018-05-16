<?php 
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class ReportsController extends Controller
{
    /**
     * @Route("/global-report", name="global_report")
     */
    public function globalReportsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // $RAW_QUERY = 'SELECT * FROM ofertas where ofertas.engagement = :status LIMIT 5;';
        $RAW_QUERY = 'SELECT * FROM ofertas';
        
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        // Set parameters 
        // $statement->bindValue('status', 1);
        $statement->execute();

        $result = $statement->fetchAll();

        $response = new Response();
        $response->setContent(json_encode(array(
            'data' => $result,
        )));
        //START DEBUG AREA
        echo '<h1>Ejemplo datos para generar informe ofertas creadas</h1><hr>';
        echo '<pre>';
        print_r($result);
        echo '<pre><hr><hr>';
        //END DEBUG AREA
        return $response;
    }
}