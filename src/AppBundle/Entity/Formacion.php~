<?php

namespace AppBundle\Entity;

/**
 * Formacion
 */
class Formacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $familiaprof;

    /**
     * @var string
     */
    private $subfamiliaprof;

    /**
     * @var integer
     */
    private $creditos;

    /**
     * @var \DateTime
     */
    private $fechacreacion;

    /**
     * @var \DateTime
     */
    private $fechaborrado;

    /**
     * @var boolean
     */
    private $activo = true;

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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Formacion
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set familiaprof
     *
     * @param string $familiaprof
     *
     * @return Formacion
     */
    public function setFamiliaprof($familiaprof)
    {
        $this->familiaprof = $familiaprof;

        return $this;
    }

    /**
     * Get familiaprof
     *
     * @return string
     */
    public function getFamiliaprof()
    {
        return $this->familiaprof;
    }

    /**
     * Set subfamiliaprof
     *
     * @param string $subfamiliaprof
     *
     * @return Formacion
     */
    public function setSubfamiliaprof($subfamiliaprof)
    {
        $this->subfamiliaprof = $subfamiliaprof;

        return $this;
    }

    /**
     * Get subfamiliaprof
     *
     * @return string
     */
    public function getSubfamiliaprof()
    {
        return $this->subfamiliaprof;
    }

    /**
     * Set creditos
     *
     * @param integer $creditos
     *
     * @return Formacion
     */
    public function setCreditos($creditos)
    {
        $this->creditos = $creditos;

        return $this;
    }

    /**
     * Get creditos
     *
     * @return integer
     */
    public function getCreditos()
    {
        return $this->creditos;
    }

    /**
     * Set fechacreacion
     *
     * @param \DateTime $fechacreacion
     *
     * @return Formacion
     */
    public function setFechacreacion($fechacreacion)
    {
        $this->fechacreacion = $fechacreacion;

        return $this;
    }

    /**
     * Get fechacreacion
     *
     * @return \DateTime
     */
    public function getFechacreacion()
    {
        return $this->fechacreacion;
    }

    /**
     * Set fechaborrado
     *
     * @param \DateTime $fechaborrado
     *
     * @return Formacion
     */
    public function setFechaborrado($fechaborrado)
    {
        $this->fechaborrado = $fechaborrado;

        return $this;
    }

    /**
     * Get fechaborrado
     *
     * @return \DateTime
     */
    public function getFechaborrado()
    {
        return $this->fechaborrado;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Formacion
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * @var boolean
     */
    private $extinto = false;


    /**
     * Set extinto
     *
     * @param boolean $extinto
     *
     * @return Formacion
     */
    public function setExtinto($extinto)
    {
        $this->extinto = $extinto;
    
        return $this;
    }

    /**
     * Get extinto
     *
     * @return boolean
     */
    public function getExtinto()
    {
        return $this->extinto;
    }
    
    /**
     * @var \AppBundle\Entity\EducationLevel
     */
    private $level;


    /**
     * Set level
     *
     * @param \AppBundle\Entity\EducationLevel $level
     *
     * @return Formacion
     */
    public function setLevel(\AppBundle\Entity\EducationLevel $level = null)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return \AppBundle\Entity\EducationLevel
     */
    public function getLevel()
    {
        return $this->level;
    }

    // Magic method to return this entity as String
    public function __toString() {
        return $this->titulo;
    }
}
