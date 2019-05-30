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

    /**
     * Get paginated search result
     *
     * Search users by a given filter
     *
     * @author Bruno Lorente
     *
     * @param  string $searchParms The filter string passed by "ApplicantController::applicantSearchAction()" method
     * @param  string $entity The Doctrine entity name passed from "ApplicantController::applicantSearchAction()" method
     * @param  integer $pageSize The number of elements per page
     * @param  integer $currentPage The current pagination page
     *
     * @see ApplicantController::applicantSearchAction()
     * @see Paginator
     * @see ExtendedSearchRepository::queryWhereClauseBuilder()
     *
     * @return object $paginator Doctrine\ORM\Tools\Pagination object wich contains the search result (array of objects)
     *
     */
    public function getPaginatedSearchResult($searchParms, $entity, $pageSize, $currentPage) {
        $em = $this->getEntityManager();
        if ( strlen($searchParms['education_id']) > 0 ) {
            $query =  'SELECT s FROM AppBundle:' . $entity . ' s ' . $this->queryWhereClauseBuilder($searchParms) . 'ORDER BY s.id ASC';
        } else {
            $query = 'SELECT s FROM AppBundle:Perfilestudiante s ORDER BY s.id ASC';
        }

        $query = $em->createQuery($query)->setFirstResult($pageSize * ($currentPage - 1))->setMaxResults($pageSize);
 
        $paginator = new Paginator($query, $fetchJoinCollection = true);
 
        return $paginator;
    }

    /**
     * Query where cLause builder
     *
     * Generates custom WHERE clauses for Doctrine queries.
     *
     * @author Bruno Lorente
     *
     * @param  string $searchParms The filter string passed by "ApplicantController::applicantSearchAction()" method
     *
     * @see ExtendedSearchRepository::getPaginatedSearchResult
     *
     * @return string $whereClause
     *
     */
    public function queryWhereClauseBuilder($searchParms) {
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

    public function getPaginateApplicant($pageSize,$currentPage)
    {
        $em=$this->getEntityManager();
         
        $dql = "SELECT p FROM AppBundle\Entity\Perfilestudiante p ORDER BY p.id DESC";
        $query = $em->createQuery($dql)
                               ->setFirstResult($pageSize * ($currentPage - 1))
                               ->setMaxResults($pageSize);
 
        $paginator = new Paginator($query, $fetchJoinCollection = true, $pageSize);
 
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