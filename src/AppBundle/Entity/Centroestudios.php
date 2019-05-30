<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Centroestudios
 */
class Centroestudios
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @Assert\Regex(
     *      pattern="([^.]{3,40})",
     *      message="school.name"
     * )
     * @var string
     */
    private $nombre;

    /**
     * @Assert\NotBlank()
     * @Assert\Regex(
     *      pattern="(^(X(-|\.)?0?\d{7}(-|\.)?[A-Z]|[A-Z](-|\.)?\d{7}(-|\.)?[0-9A-Z]|\d{8}(-|\.)?[A-Z])$)",    
     *      message="school.cif"
     * )
     * @var string
     */
    private $cif;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @Assert\NotBlank()
     * @Assert\Regex(
     *      pattern="(^(\+34|0034|34)?[6|7|9][0-9]{8}$)",
     *      message="school.phone"
     *)
     * @var string
     */
    private $telefono;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    private $direccion;

    /**
     * @Assert\Regex(
     *      pattern="(^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$)",  
     *      message="school.zip"
     * )
     * @var integer
     */
    private $cp;

    /**
     * @Assert\Type("string")
     * @var string
     */
    private $localidad;

    /**
     * @Assert\Type("string")
     * @Assert\Regex(
     *      pattern="([^.]{3,40})",  
     *      message="school.cif"
     * )
     * @var string
     */
    private $pais;

    /**
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "school.email",
     *     checkMX = true
     * )
     * @var string
     */
    private $email;

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
    private $activo = '1';

    /**
     * @var string
     */
    private $familiaprof;

    /**
     * @var string
     */
    private $subfamiliaprof;

    /**
     * @Assert\NotBlank()
     * @Assert\Regex(
     *      pattern="(^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$)",  
     *      message="school.web"
     * )
     * @var string
     */
    private $web;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rrss;

    /**
     * @var string
     */
    private $centroestudioscol;

    /**
     * @var \AppBundle\Entity\Usuarios
     */
    private $idusuario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $formacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->formacion = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Centroestudios
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Centroestudios
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Centroestudios
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Centroestudios
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     *
     * @return Centroestudios
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Centroestudios
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Centroestudios
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Centroestudios
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fechacreacion
     *
     * @param \DateTime $fechacreacion
     *
     * @return Centroestudios
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
     * @return Centroestudios
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
     * @return Centroestudios
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
     * Set familiaprof
     *
     * @param string $familiaprof
     *
     * @return Centroestudios
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
     * @return Centroestudios
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
     * Set centroestudioscol
     *
     * @param string $centroestudioscol
     *
     * @return Centroestudios
     */
    public function setCentroestudioscol($centroestudioscol)
    {
        $this->centroestudioscol = $centroestudioscol;

        return $this;
    }

    /**
     * Get centroestudioscol
     *
     * @return string
     */
    public function getCentroestudioscol()
    {
        return $this->centroestudioscol;
    }

    /**
     * Set idusuario
     *
     * @param \AppBundle\Entity\Usuarios $idusuario
     *
     * @return Centroestudios
     */
    public function setIdusuario(\AppBundle\Entity\Usuarios $idusuario = null)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \AppBundle\Entity\Usuarios
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Add formacion
     *
     * @param \AppBundle\Entity\Formacion $formacion
     *
     * @return Centroestudios
     */
    public function addFormacion(\AppBundle\Entity\Formacion $formacion)
    {
        $this->formacion[] = $formacion;

        return $this;
    }

    /**
     * Remove formacion
     *
     * @param \AppBundle\Entity\Formacion $formacion
     */
    public function removeFormacion(\AppBundle\Entity\Formacion $formacion)
    {
        $this->formacion->removeElement($formacion);
    }

    /**
     * Get formacion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormacion()
    {
        return $this->formacion;
    }
    /**
     * @var integer
     */
    private $idcategoria;


    /**
     * Set idcategoria
     *
     * @param integer $idcategoria
     *
     * @return Centroestudios
     */
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return integer
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * Set id
     *
     * @param \AppBundle\Entity\Categorias $id
     *
     * @return Centroestudios
     */
    public function setId(\AppBundle\Entity\Categorias $id = null)
    {
        $this->id = $id;

        return $this;
    }
    
    /**
     * Set web
     *
     * @param string $web
     *
     * @return Centroestudios
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Add rrss
     *
     * @param \AppBundle\Entity\Rrss $rrss
     *
     * @return Centroestudios
     */
    public function addRrss(\AppBundle\Entity\Rrss $rrss)
    {
        $this->rrss[] = $rrss;

        return $this;
    }

    /**
     * Remove rrss
     *
     * @param \AppBundle\Entity\Rrss $rrss
     */
    public function removeRrss(\AppBundle\Entity\Rrss $rrss)
    {
        $this->rrss->removeElement($rrss);
    }

    /**
     * Get rrss
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRrss()
    {
        return $this->rrss;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categorias;


    /**
     * Add categoria
     *
     * @param \AppBundle\Entity\Categorias $categoria
     *
     * @return Centroestudios
     */
    public function addCategoria(\AppBundle\Entity\Categorias $categoria)
    {
        $this->categorias[] = $categoria;

        return $this;
    }

    /**
     * Remove categoria
     *
     * @param \AppBundle\Entity\Categorias $categoria
     */
    public function removeCategoria(\AppBundle\Entity\Categorias $categoria)
    {
        $this->categorias->removeElement($categoria);
    }

    /**
     * Get categorias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategorias()
    {
        return $this->categorias;
    }
    
    /**
     * @var string
     */
    private $imagen;

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Perfilempresa
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }
    
    /**
     * Set cif
     *
     * @param string $cif
     *
     * @return Centroestudios
     */
    public function setCif($cif)
    {
        $this->cif = $cif;
    
        return $this;
    }

    /**
     * Get cif
     *
     * @return string
     */
    public function getCif()
    {
        return $this->cif;
    }

    //Metodo MAGICO creado para devolver el nombre de la categoria
    public function __toString() {
        return $this->nombre;
    }
}
