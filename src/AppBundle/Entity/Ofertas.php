<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Ofertas
 */
class Ofertas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechacreacion;

    /**
     * @var \DateTime
     */
    private $fecharevision;

    /**
     * @var \DateTime
     */
    private $fechaborrado;

    /**
     * @var boolean
     */
    private $activo = '1';

    /**
     * @var \Date
     */
    private $fechainicio;

    /**
     * @var \Date
     */
    private $fechafin;

    /**
     * @var integer
     */
    private $vacantes;

    /**
     * @Assert\Regex(
     *      pattern="(^[\.a-zA-ZzäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙñ1-9\. ]{20,200}$)",
     *      message="offer.description"
     * )
     * @var string
     */
    private $descripcion;

    /**
     * @var \AppBundle\Entity\Perfilempresa
     */
    private $idempresa;

    /**
     * @var \AppBundle\Entity\Tiposoferta
     */
    private $tipo;

    /**
     * @var \AppBundle\Entity\Categorias
     */
    private $categoria;

    /**
     * @Assert\Regex(
     *      pattern="(^[\.a-zA-ZzäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙñ1-9\. ]{3,21}$)",
     *      message="offer.title"
     * )
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $inscribed;

    /**
     * @var integer
     */
    private $vacancies;


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
     * Set fechacreacion
     *
     * @param \DateTime $fechacreacion
     *
     * @return Ofertas
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
     * Set fecharevision
     *
     * @param \DateTime $fecharevision
     *
     * @return Ofertas
     */
    public function setFecharevision($fecharevision)
    {
        $this->fecharevision = $fecharevision;

        return $this;
    }

    /**
     * Get fecharevision
     *
     * @return \DateTime
     */
    public function getFecharevision()
    {
        return $this->fecharevision;
    }

    /**
     * Set fechaborrado
     *
     * @param \DateTime $fechaborrado
     *
     * @return Ofertas
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
     * @return Ofertas
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
     * Set fechainicio
     *
     * @param \Date $fechainicio
     *
     * @return Ofertas
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \Date
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param \Date $fechafin
     *
     * @return Ofertas
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \Date
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set vacantes
     *
     * @param integer $vacantes
     *
     * @return Ofertas
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Ofertas
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
     * Set idempresa
     *
     * @param \AppBundle\Entity\Perfilempresa $idempresa
     *
     * @return Ofertas
     */
    public function setIdempresa(\AppBundle\Entity\Perfilempresa $idempresa = null)
    {
        $this->idempresa = $idempresa;

        return $this;
    }

    /**
     * Get idempresa
     *
     * @return \AppBundle\Entity\Perfilempresa
     */
    public function getIdempresa()
    {
        return $this->idempresa;
    }

    /**
     * Set tipo
     *
     * @param \AppBundle\Entity\Tiposoferta $tipo
     *
     * @return Ofertas
     */
    public function setTipo(\AppBundle\Entity\Tiposoferta $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \AppBundle\Entity\Tiposoferta
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set categoria
     *
     * @param \AppBundle\Entity\Categorias $categoria
     *
     * @return Ofertas
     */
    public function setCategoria(\AppBundle\Entity\Categorias $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \AppBundle\Entity\Categorias
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
    /**
     * @var boolean
     */
    private $validated = false;

    /**
     * @var boolean
     */
    private $active = true;


    /**
     * Set validated
     *
     * @param integer $validated
     *
     * @return Ofertas
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;
    
        return $this;
    }

    /**
     * Get validated
     *
     * @return integer
     */
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * Set active
     *
     * @param integer $active
     *
     * @return Ofertas
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return integer
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Ofertas
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set inscribed
     *
     * @param integer $inscribed
     *
     * @return Ofertas
     */
    public function setInscribed($inscribed)
    {
        $this->inscribed = $inscribed;
    
        return $this;
    }

    /**
     * Get inscribed
     *
     * @return integer
     */
    public function getInscribed()
    {
        return $this->inscribed;
    }

    /**
     * Set vacancies
     *
     * @param integer $vacancies
     *
     * @return Ofertas
     */
    public function setVacancies($vacancies)
    {
        $this->vacancies = $vacancies;
    
        return $this;
    }

    /**
     * Get vacancies
     *
     * @return integer
     */
    public function getVacancies()
    {
        return $this->vacancies;
    }

    // Magic method to return this entity as String
    public function __toString() {
        return $this->title;
    }
    /**
     * @var boolean
     */
    private $finished = false;

    /**
     * @var string
     */
    private $closurereason;

    /**
     * @var string
     */
    private $closureexplanation;

    /**
     * @var boolean
     */
    private $engagement = false;


    /**
     * Set finished
     *
     * @param boolean $finished
     *
     * @return Ofertas
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

    /**
     * Set closurereason
     *
     * @param string $closurereason
     *
     * @return Ofertas
     */
    public function setClosurereason($closurereason)
    {
        $this->closurereason = $closurereason;
    
        return $this;
    }

    /**
     * Get closurereason
     *
     * @return string
     */
    public function getClosurereason()
    {
        return $this->closurereason;
    }

    /**
     * Set closureexplanation
     *
     * @param string $closureexplanation
     *
     * @return Ofertas
     */
    public function setClosureexplanation($closureexplanation)
    {
        $this->closureexplanation = $closureexplanation;
    
        return $this;
    }

    /**
     * Get closureexplanation
     *
     * @return string
     */
    public function getClosureexplanation()
    {
        return $this->closureexplanation;
    }

    /**
     * Set engagement
     *
     * @param boolean $engagement
     *
     * @return Ofertas
     */
    public function setEngagement($engagement)
    {
        $this->engagement = $engagement;
    
        return $this;
    }

    /**
     * Get engagement
     *
     * @return boolean
     */
    public function getEngagement()
    {
        return $this->engagement;
    }
}
