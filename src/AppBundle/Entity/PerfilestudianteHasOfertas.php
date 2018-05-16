<?php

namespace AppBundle\Entity;

/**
 * PerfilestudianteHasOfertas
 */
class PerfilestudianteHasOfertas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Ofertas
     */
    private $ofertasid;

    /**
     * @var \AppBundle\Entity\Perfilestudiante
     */
    private $perfilestudianteid;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return PerfilestudianteHasOfertas
     */
    
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set ofertasid
     *
     * @param \AppBundle\Entity\Ofertas $ofertasid
     *
     * @return PerfilestudianteHasOfertas
     */
    public function setOfertasid(\AppBundle\Entity\Ofertas $ofertasid = null)
    {
        $this->ofertasid = $ofertasid;

        return $this;
    }

    /**
     * Get ofertasid
     *
     * @return \AppBundle\Entity\Ofertas
     */
    public function getOfertasid()
    {
        return $this->ofertasid;
    }

    /**
     * Set perfilestudianteid
     *
     * @param \AppBundle\Entity\Perfilestudiante $perfilestudianteid
     *
     * @return PerfilestudianteHasOfertas
     */
    public function setPerfilestudianteid(\AppBundle\Entity\Perfilestudiante $perfilestudianteid = null)
    {
        $this->perfilestudianteid = $perfilestudianteid;

        return $this;
    }

    /**
     * Get perfilestudianteid
     *
     * @return \AppBundle\Entity\Perfilestudiante
     */
    public function getPerfilestudianteid()
    {
        return $this->perfilestudianteid;
    }
    /**
     * @var boolean
     */
    private $status = '1';

    /**
     * @var \DateTime
     */
    private $modified;


    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return PerfilestudianteHasOfertas
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return PerfilestudianteHasOfertas
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }
}
