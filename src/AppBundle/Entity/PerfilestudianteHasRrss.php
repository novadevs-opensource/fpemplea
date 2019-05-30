<?php

namespace AppBundle\Entity;

/**
 * PerfilestudianteHasRrss
 */
class PerfilestudianteHasRrss
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
     * @var \AppBundle\Entity\Perfilestudiante
     */
    private $perfilestudianteid;

    /**
     * @var \AppBundle\Entity\Rrss
     */
    private $rrssid;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return PerfilestudianteHasRrss
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
     * @return PerfilestudianteHasRrss
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
     * Set perfilestudianteid
     *
     * @param \AppBundle\Entity\Perfilestudiante $perfilestudianteid
     *
     * @return PerfilestudianteHasRrss
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
     * Set rrssid
     *
     * @param \AppBundle\Entity\Rrss $rrssid
     *
     * @return PerfilestudianteHasRrss
     */
    public function setRrssid(\AppBundle\Entity\Rrss $rrssid = null)
    {
        $this->rrssid = $rrssid;

        return $this;
    }

    /**
     * Get rrssid
     *
     * @return \AppBundle\Entity\Rrss
     */
    public function getRrssid()
    {
        return $this->rrssid;
    }
}
