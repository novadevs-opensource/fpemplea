<?php

namespace AppBundle\Entity;

/**
 * FormacionHasCategorias
 */
class FormacionHasCategorias
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
     * @var \AppBundle\Entity\Formacion
     */
    private $formacion;


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
     * @return FormacionHasCategorias
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
     * Set formacion
     *
     * @param \AppBundle\Entity\Formacion $formacion
     *
     * @return FormacionHasCategorias
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
}
