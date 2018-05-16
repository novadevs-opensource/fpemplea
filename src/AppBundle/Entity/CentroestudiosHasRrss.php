<?php

namespace AppBundle\Entity;

/**
 * CentroestudiosHasRrss
 */
class CentroestudiosHasRrss
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $valor;

    /**
     * @var \AppBundle\Entity\Centroestudios
     */
    private $centroestudios;

    /**
     * @var \AppBundle\Entity\Rrss
     */
    private $rrss;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return CentroestudiosHasRrss
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
     * Set valor
     *
     * @param string $valor
     *
     * @return CentroestudiosHasRrss
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set centroestudios
     *
     * @param \AppBundle\Entity\Centroestudios $centroestudios
     *
     * @return CentroestudiosHasRrss
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
     * Set rrss
     *
     * @param \AppBundle\Entity\Rrss $rrss
     *
     * @return CentroestudiosHasRrss
     */
    public function setRrss(\AppBundle\Entity\Rrss $rrss = null)
    {
        $this->rrss = $rrss;

        return $this;
    }

    /**
     * Get rrss
     *
     * @return \AppBundle\Entity\Rrss
     */
    public function getRrss()
    {
        return $this->rrss;
    }
}
