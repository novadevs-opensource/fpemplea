<?php

namespace AppBundle\Entity;

/**
 * PerfilestudianteHasCentroestudios
 */
class PerfilestudianteHasCentroestudios
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Centroestudios
     */
    private $centroestudios;

    /**
     * @var \AppBundle\Entity\Perfilestudiante
     */
    private $perfilestudiante;


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
     * Set centroestudios
     *
     * @param \AppBundle\Entity\Centroestudios $centroestudios
     *
     * @return PerfilestudianteHasCentroestudios
     */
    public function setCentroestudios(\AppBundle\Entity\Centroestudios $centroestudios = null)
    {
        $this->centroestudios = $centroestudios;
    
        return $this;
    }

    /**
     * Get centroestudios
     *
     * @return \AppBundle\Entity\Centroestudios
     */
    public function getCentroestudios()
    {
        return $this->centroestudios;
    }

    /**
     * Set perfilestudiante
     *
     * @param \AppBundle\Entity\Perfilestudiante $perfilestudiante
     *
     * @return PerfilestudianteHasCentroestudios
     */
    public function setPerfilestudiante(\AppBundle\Entity\Perfilestudiante $perfilestudiante = null)
    {
        $this->perfilestudiante = $perfilestudiante;
    
        return $this;
    }

    /**
     * Get perfilestudiante
     *
     * @return \AppBundle\Entity\Perfilestudiante
     */
    public function getPerfilestudiante()
    {
        return $this->perfilestudiante;
    }
}
