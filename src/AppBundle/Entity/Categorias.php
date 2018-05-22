<?php

namespace AppBundle\Entity;

/**
 * Categorias
 */
class Categorias
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
     * @return Categorias
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
     * @return Categorias
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $centroestudios;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ofertas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->centroestudios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ofertas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add centroestudio
     *
     * @param \AppBundle\Entity\Centroestudios $centroestudio
     *
     * @return Categorias
     */
    public function addCentroestudio(\AppBundle\Entity\Centroestudios $centroestudio)
    {
        $this->centroestudios[] = $centroestudio;

        return $this;
    }

    /**
     * Remove centroestudio
     *
     * @param \AppBundle\Entity\Centroestudios $centroestudio
     */
    public function removeCentroestudio(\AppBundle\Entity\Centroestudios $centroestudio)
    {
        $this->centroestudios->removeElement($centroestudio);
    }

    /**
     * Get centroestudios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCentroestudios()
    {
        return $this->centroestudios;
    }

    /**
     * Add oferta
     *
     * @param \AppBundle\Entity\Ofertas $oferta
     *
     * @return Categorias
     */
    public function addOferta(\AppBundle\Entity\Ofertas $oferta)
    {
        $this->ofertas[] = $oferta;

        return $this;
    }

    /**
     * Remove oferta
     *
     * @param \AppBundle\Entity\Ofertas $oferta
     */
    public function removeOferta(\AppBundle\Entity\Ofertas $oferta)
    {
        $this->ofertas->removeElement($oferta);
    }

    /**
     * Get ofertas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOfertas()
    {
        return $this->ofertas;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ofertasid;


    /**
     * Add ofertasid
     *
     * @param \AppBundle\Entity\Ofertas $ofertasid
     *
     * @return Categorias
     */
    public function addOfertasid(\AppBundle\Entity\Ofertas $ofertasid)
    {
        $this->ofertasid[] = $ofertasid;

        return $this;
    }

    /**
     * Remove ofertasid
     *
     * @param \AppBundle\Entity\Ofertas $ofertasid
     */
    public function removeOfertasid(\AppBundle\Entity\Ofertas $ofertasid)
    {
        $this->ofertasid->removeElement($ofertasid);
    }

    /**
     * Get ofertasid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOfertasid()
    {
        return $this->ofertasid;
    }
    
    //Metodo MAGICO creado para devolver el nombre de la categoria
    public function __toString() {
        try {
            return (string) $this->nombre;
        } catch (Exception $exception) {
            return '';
        }
    }
}
