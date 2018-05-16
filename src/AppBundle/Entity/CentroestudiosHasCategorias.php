<?php

namespace AppBundle\Entity;

/**
 * CentroestudiosHasCategorias
 */
class CentroestudiosHasCategorias
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Categorias
     */
    private $categorias;

    /**
     * @var \AppBundle\Entity\Centroestudios
     */
    private $centroestudios;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return CentroestudiosHasCategorias
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
     * Set categorias
     *
     * @param \AppBundle\Entity\Categorias $categorias
     *
     * @return CentroestudiosHasCategorias
     */
    public function setCategorias(\AppBundle\Entity\Categorias $categorias = null)
    {
        $this->categorias = $categorias;

        return $this;
    }

    /**
     * Get categorias
     *
     * @return \AppBundle\Entity\Categorias
     */
    public function getCategorias()
    {
        return $this->categorias;
    }

    /**
     * Set centroestudios
     *
     * @param \AppBundle\Entity\Centroestudios $centroestudios
     *
     * @return CentroestudiosHasCategorias
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
}
