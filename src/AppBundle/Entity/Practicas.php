<?php

namespace AppBundle\Entity;

/**
 * Practicas
 */
class Practicas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idempresa;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \DateTime
     */
    private $fechainicio;

    /**
     * @var \DateTime
     */
    private $fechafin;

    /**
     * @var string
     */
    private $requisitos;

    /**
     * @var integer
     */
    private $vacantes;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var \AppBundle\Entity\Ofertas
     */
    private $ofertas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $perfilestudiante;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->perfilestudiante = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Practicas
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
     * Set idempresa
     *
     * @param integer $idempresa
     *
     * @return Practicas
     */
    public function setIdempresa($idempresa)
    {
        $this->idempresa = $idempresa;

        return $this;
    }

    /**
     * Get idempresa
     *
     * @return integer
     */
    public function getIdempresa()
    {
        return $this->idempresa;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Practicas
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     *
     * @return Practicas
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     *
     * @return Practicas
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set requisitos
     *
     * @param string $requisitos
     *
     * @return Practicas
     */
    public function setRequisitos($requisitos)
    {
        $this->requisitos = $requisitos;

        return $this;
    }

    /**
     * Get requisitos
     *
     * @return string
     */
    public function getRequisitos()
    {
        return $this->requisitos;
    }

    /**
     * Set vacantes
     *
     * @param integer $vacantes
     *
     * @return Practicas
     */
    public function setVacantes($vacantes)
    {
        $this->vacantes = $vacantes;

        return $this;
    }

    /**
     * Get vacantes
     *
     * @return integer
     */
    public function getVacantes()
    {
        return $this->vacantes;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Practicas
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
     * Set ofertas
     *
     * @param \AppBundle\Entity\Ofertas $ofertas
     *
     * @return Practicas
     */
    public function setOfertas(\AppBundle\Entity\Ofertas $ofertas = null)
    {
        $this->ofertas = $ofertas;

        return $this;
    }

    /**
     * Get ofertas
     *
     * @return \AppBundle\Entity\Ofertas
     */
    public function getOfertas()
    {
        return $this->ofertas;
    }

    /**
     * Add perfilestudiante
     *
     * @param \AppBundle\Entity\Perfilestudiante $perfilestudiante
     *
     * @return Practicas
     */
    public function addPerfilestudiante(\AppBundle\Entity\Perfilestudiante $perfilestudiante)
    {
        $this->perfilestudiante[] = $perfilestudiante;

        return $this;
    }

    /**
     * Remove perfilestudiante
     *
     * @param \AppBundle\Entity\Perfilestudiante $perfilestudiante
     */
    public function removePerfilestudiante(\AppBundle\Entity\Perfilestudiante $perfilestudiante)
    {
        $this->perfilestudiante->removeElement($perfilestudiante);
    }

    /**
     * Get perfilestudiante
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPerfilestudiante()
    {
        return $this->perfilestudiante;
    }
}
