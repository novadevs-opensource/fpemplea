<?php

namespace AppBundle\Entity;

/**
 * Competencias
 */
class Competencias
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idpadre;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $tipocompetencia;


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
     * Set idpadre
     *
     * @param integer $idpadre
     *
     * @return Competencias
     */
    public function setIdpadre($idpadre)
    {
        $this->idpadre = $idpadre;

        return $this;
    }

    /**
     * Get idpadre
     *
     * @return integer
     */
    public function getIdpadre()
    {
        return $this->idpadre;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Competencias
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set tipocompetencia
     *
     * @param integer $tipocompetencia
     *
     * @return Competencias
     */
    public function setTipocompetencia($tipocompetencia)
    {
        $this->tipocompetencia = $tipocompetencia;

        return $this;
    }

    /**
     * Get tipocompetencia
     *
     * @return integer
     */
    public function getTipocompetencia()
    {
        return $this->tipocompetencia;
    }
}
