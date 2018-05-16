<?php

namespace AppBundle\Entity;

/**
 * SchoolHasOffer
 */
class SchoolHasOffer
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Ofertas
     */
    private $offer;

    /**
     * @var \AppBundle\Entity\Centroestudios
     */
    private $school;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set offer
     *
     * @param \AppBundle\Entity\Ofertas $offer
     *
     * @return SchoolHasOffer
     */
    public function setOffer(\AppBundle\Entity\Ofertas $offer = null)
    {
        $this->offer = $offer;
    
        return $this;
    }

    /**
     * Get offer
     *
     * @return \AppBundle\Entity\Ofertas
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Set school
     *
     * @param \AppBundle\Entity\Centroestudios $school
     *
     * @return SchoolHasOffer
     */
    public function setSchool(\AppBundle\Entity\Centroestudios $school = null)
    {
        $this->school = $school;
    
        return $this;
    }

    /**
     * Get school
     *
     * @return \AppBundle\Entity\Centroestudios
     */
    public function getSchool()
    {
        return $this->school;
    }
}
