<?php

namespace AppBundle\Entity;

/**
 * FormacionHasNivel
 */
class FormacionHasNivel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Formacion
     */
    private $idformacion;

    /**
     * @var \AppBundle\Entity\Nivelesformativos
     */
    private $idnivel;


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
     * Set idformacion
     *
     * @param \AppBundle\Entity\Formacion $idformacion
     *
     * @return FormacionHasNivel
     */
    public function setIdformacion(\AppBundle\Entity\Formacion $idformacion = null)
    {
        $this->idformacion = $idformacion;

        return $this;
    }

    /**
     * Get idformacion
     *
     * @return \AppBundle\Entity\Formacion
     */
    public function getIdformacion()
    {
        return $this->idformacion;
    }

    /**
     * Set idnivel
     *
     * @param \AppBundle\Entity\Nivelesformativos $idnivel
     *
     * @return FormacionHasNivel
     */
    public function setIdnivel(\AppBundle\Entity\Nivelesformativos $idnivel = null)
    {
        $this->idnivel = $idnivel;

        return $this;
    }

    /**
     * Get idnivel
     *
     * @return \AppBundle\Entity\Nivelesformativos
     */
    public function getIdnivel()
    {
        return $this->idnivel;
    }
}
