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
    
    public function getResultAndCount($type, $entity, $fieldOne, $fieldTwo)
    {
        if($type)
        {
            if($fieldTwo != null)
            {
                $res = $this->getEntityManager()->createQuery(
                    'SELECT s
                    FROM AppBundle:'.$entity.' s 
                    WHERE IDENTITY(s.'.$fieldTwo.') LIKE :type
                    ORDER BY s.id ASC'
                )
                ->setParameter('type', '%'.$type.'%')
                ->getResult();
            }
            elseif($type != null || $fieldOne != null)
            {
                $res = $this->getEntityManager()->createQuery(
                    'SELECT s
                    FROM AppBundle:'.$entity.' s 
                    WHERE s.'.$fieldOne.' LIKE :type
                    ORDER BY s.id ASC'
                )
                ->setParameter('type', '%'.$type.'%')
                ->getResult();
            }
            else
            {
                $res = $this->getEntityManager()->createQuery(
                    'SELECT s
                    FROM AppBundle:'.$entity.' s 
                    ORDER BY s.id ASC'
                )
                ->getResult();
            }
            return array('res' => $res);
        }
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