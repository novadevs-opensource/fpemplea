<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * PerfilestudianteHasFormacion
 */
class PerfilestudianteHasFormacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Formacion
     */
    private $formacion;

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
     * Set formacion
     *
     * @param \AppBundle\Entity\Formacion $formacion
     *
     * @return PerfilestudianteHasFormacion
     */
    public function setFormacion(\AppBundle\Entity\Formacion $formacion = null)
    {
        $this->formacion = $formacion;
    
        return $this;
    }

    /**
     * Get formacion
     *
     * @return \AppBundle\Entity\Formacion
     */
    public function getFormacion()
    {
        return $this->formacion;
    }

    /**
     * Set perfilestudiante
     *
     * @param \AppBundle\Entity\Perfilestudiante $perfilestudiante
     *
     * @return PerfilestudianteHasFormacion
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
    
    /**
     * @var boolean
     */
    private $finished = true;


    /**
     * Set finished
     *
     * @param boolean $finished
     *
     * @return PerfilestudianteHasFormacion
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;
    
        return $this;
    }

    /**
     * Get finished
     *
     * @return boolean
     */
    public function getFinished()
    {
        return $this->finished;
    }
    
    // Magic method to return this entity as String
    public function __toString() {
        return $this->perfilestudiante;
    }
    
    /**
     * @var string
     */
    private $start;

    /**
     * @var string
     */
    private $end;


    /**
     * Set start
     *
     * @param string $start
     *
     * @return PerfilestudianteHasFormacion
     */
    public function setStart($start)
    {
        $this->start = $start;
    
        return $this;
    }

    /**
     * Get start
     *
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param string $end
     *
     * @return PerfilestudianteHasFormacion
     */
    public function setEnd($end)
    {
        $this->end = $end;
    
        return $this;
    }

    /**
     * Get end
     *
     * @return string
     */
    public function getEnd()
    {
        return $this->end;
    }
    /**
     * @var \AppBundle\Entity\Centroestudios
     */
    private $school;


    /**
     * Set school
     *
     * @param \AppBundle\Entity\Centroestudios $school
     *
     * @return PerfilestudianteHasFormacion
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
