<?php

namespace AppBundle\Repository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\DBAL\Driver\Connection;

class ExtendedSearchRepository extends \Doctrine\ORM\EntityRepository
{
    private $conn;  
    public function __construct($em, $class)  
    {  
        parent::__construct($em, $class);  
        $this->conn = $this->getEntityManager()->getConnection();  
    }
/*
    * Method: getPaginatedApplicants
    *
    *   Searchs users by filter.
    *
    * TODO: When $searchParms array is empty, entity have to be Perfilestudiante, so the code inside 
    * applicantSearchAction method that handles it needs to be placed here.
    *
    * Named parameters:
    *
    *   searchParms - array of POST parameters passed by "ApplicantController->applicantSearchAction()" method
    *   entity - Doctrine entyty passed as string by "ApplicantController->applicantSearchAction()" method
    *
    * Returns:
    *
    *   Returns an array of entities
*/
    public function getPaginatedApplicants($searchParms, $entity, $pageSize, $currentPage) {
        $em=$this->getEntityManager();
        if ( strlen($searchParms['education_id']) > 0 ) {
            $query =  'SELECT s FROM AppBundle:' . $entity . ' s ' . $this->queryWhereBuilder($searchParms) . 'ORDER BY s.id ASC';
        } else {
            $query = 'SELECT s FROM AppBundle:Perfilestudiante s ORDER BY s.id ASC';
        }

        $query = $em->createQuery($query)
                               ->setFirstResult($pageSize * ($currentPage - 1))
                               ->setMaxResults($pageSize);
 
        $paginator = new Paginator($query, $fetchJoinCollection = true);
 
        return $paginator;
        
        // $res = $this->getEntityManager()->createQuery($query)->getResult();
        // return array('res' => $res);
    }

/*
    * Method: queryWhereBuilder
    *
    *   Generates custom WHERE conditions.   
    *
    * Named parameters:
    *
    *   searchParms - array of POST parameters passed by "$this->getPaginatedApplicants()" method
    *
    * Returns:
    *
    *   Returns an string
*/
    public function queryWhereBuilder($searchParms) {
        $whereClause = '';
        if ( strlen($searchParms['education_id']) > 0 ){
            $whereClause .= ' WHERE IDENTITY(s.formacion) = '. $searchParms['education_id'];
        } 
        return $whereClause .= " ";
    }

    public function offerGetResultAndCount($type, $entity, $fieldOne, $fieldTwo)
    {
        if($type)
        {
            $res = $this->conn->fetchAll(
                    'SELECT id
                    FROM categorias c
                    WHERE c .idpadre = (SELECT idpadre 
                                        FROM categorias c 
                                        WHERE c.id = '.$type.')');

            if (empty($res)) {
                $res = $this->getEntityManager()->createQuery(
                    'SELECT s
                    FROM AppBundle:'.$entity.' s 
                    WHERE IDENTITY(s.'.$fieldOne.') LIKE :type
                    ORDER BY s.id ASC'
                )
                ->setParameter('type', '%'.$type.'%')
                ->getResult();
                return array('res' => $res);

            } else {
                $em = $this->getEntityManager();
                $ofertas_rep = $em->getRepository("AppBundle:Ofertas");
                $categories_rep = $em->getRepository("AppBundle:Categorias");
                $oferta = [];
                // var_dump($res);
                for ($i=0; $i < count($res); $i++) {
                    $cat = $categories_rep->findOneById($res[$i]['id']);
                    if(!is_null($ofertas_rep->findOneByCategoria($cat->getIdpadre()))) {
                        $oferta[$i] = $ofertas_rep->findOneByCategoria($cat->getIdpadre());
                    } else{
                        continue;
                    }
                    //echo $cat->getId().' '.$cat->getNombre().' hijo de '.$cat->getIdpadre().'<br>';
                }
                return array(array_unique($oferta));
            }
        }
    }
    
    //TODO: PUT THESE METHODS TO THEIR CORRECT REPOSITORY
    public function getPaginateCompany($pageSize=3,$currentPage)
    {
        $em=$this->getEntityManager();
         
        $dql = "SELECT p FROM AppBundle\Entity\Perfilempresa p ORDER BY p.id DESC";
        $query = $em->createQuery($dql)
                               ->setFirstResult($pageSize * ($currentPage - 1))
                               ->setMaxResults($pageSize);
 
        $paginator = new Paginator($query, $fetchJoinCollection = true);
 
        return $paginator;
    }

    public function getPaginateApplicant($pageSize=3,$currentPage)
    {
        $em=$this->getEntityManager();
         
        $dql = "SELECT p FROM AppBundle\Entity\Perfilestudiante p ORDER BY p.id DESC";
        $query = $em->createQuery($dql)
                               ->setFirstResult($pageSize * ($currentPage - 1))
                               ->setMaxResults($pageSize);
 
        $paginator = new Paginator($query, $fetchJoinCollection = true);
 
        return $paginator;
    }

    public function getPaginateOffer($pageSize=3,$currentPage)
    {
        $em=$this->getEntityManager();
         
        $dql = "SELECT p FROM AppBundle\Entity\Ofertas p ORDER BY p.id DESC";
        $query = $em->createQuery($dql)
                               ->setFirstResult($pageSize * ($currentPage - 1))
                               ->setMaxResults($pageSize);
 
        $paginator = new Paginator($query, $fetchJoinCollection = true);
 
        return $paginator;
    }

    //TODO
    public function getFullText($searchterm)
    {
        $em=$this->getEntityManager();

        $result = $em->createQueryBuilder('p')
            ->addSelect("MATCH_AGAINST (p.dni, p.localidad, p.pais, p.intereses, :searchterm 'IN NATURAL MODE') as score")
            ->add('where', 'MATCH_AGAINST(p.dni, p.localidad, p.pais, p.intereses, :searchterm) > 0.8')
            ->setParameter('searchterm', "Test word")
            ->orderBy('score', 'desc')
            ->getQuery()
            ->getResult();

            return $result;
    }
}