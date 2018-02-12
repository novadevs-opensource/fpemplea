<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\ORM\Mapping as ORM;


/**
 * Perfilempresa
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExtendedSearchRepository")
 */
class Perfilempresa
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $personacontacto;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @Assert\Regex(
     *      pattern="(^([ABCDEFGHJKLMNPQRSUVWabcdefghijklmnpqrsuvw])(\d{7})([0-9A-J-a-j])$)",  
     *      message="school.cif"
     * )
     * @var string
     */
    private $cif;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $fechacreacion;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    private $sector;

    /**
     * @var integer
     */
    private $trabajadores;

    /**
     * @Assert\Regex(
     *      pattern="(^(\+34|0034|34)?[6|7|9][0-9]{8}$)",
     *      message="school.phone"
     *)
     * @var string
     */
    private $telefono;

    /**
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
     * @var string
     */
    private $localidad;

    /**
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
    private $emailcontacto;

    /**
     * @Assert\Regex(
     *      pattern="(^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$)",  
     *      message="school.web"
     * )
     * @var string
     */
    private $web;

    /**
     * @var integer
     */
    private $personaIdpersona;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    private $horariocontacto;

    /**
     * @var \DateTime
     */
    private $fechaborrado;

    /**
     * @var boolean
     */
    private $activo = true;

    /**
     * @var \DateTime
     */
    private $fechamodificacion;

    /**
     * @var \AppBundle\Entity\Usuarios
     */
    private $idusuario;

    /**
     * @var string
     */
    private $imagen;


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
     * @return Perfilempresa
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
     * Set sector
     *
     * @param string $sector
     *
     * @return Perfilempresa
     */
    public function setSector($sector)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return string
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set trabajadores
     *
     * @param integer $trabajadores
     *
     * @return Perfilempresa
     */
    public function setTrabajadores($trabajadores)
    {
        $this->trabajadores = $trabajadores;

        return $this;
    }

    /**
     * Get trabajadores
     *
     * @return integer
     */
    public function getTrabajadores()
    {
        return $this->trabajadores;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Perfilempresa
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
     * @return Perfilempresa
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
     * @return Perfilempresa
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
     * @return Perfilempresa
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
     * @return Perfilempresa
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
     * Set emailcontacto
     *
     * @param string $emailcontacto
     *
     * @return Perfilempresa
     */
    public function setEmailcontacto($emailcontacto)
    {
        $this->emailcontacto = $emailcontacto;

        return $this;
    }

    /**
     * Get emailcontacto
     *
     * @return string
     */
    public function getEmailcontacto()
    {
        return $this->emailcontacto;
    }

    /**
     * Set personaIdpersona
     *
     * @param integer $personaIdpersona
     *
     * @return Perfilempresa
     */
    public function setPersonaIdpersona($personaIdpersona)
    {
        $this->personaIdpersona = $personaIdpersona;

        return $this;
    }

    /**
     * Get personaIdpersona
     *
     * @return integer
     */
    public function getPersonaIdpersona()
    {
        return $this->personaIdpersona;
    }

    /**
     * Set horariocontacto
     *
     * @param string $horariocontacto
     *
     * @return Perfilempresa
     */
    public function setHorariocontacto($horariocontacto)
    {
        $this->horariocontacto = $horariocontacto;

        return $this;
    }

    /**
     * Get horariocontacto
     *
     * @return string
     */
    public function getHorariocontacto()
    {
        return $this->horariocontacto;
    }

    /**
     * Set fechaborrado
     *
     * @param \DateTime $fechaborrado
     *
     * @return Perfilempresa
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
     * @return Perfilempresa
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
     * Set fechamodificacion
     *
     * @param \DateTime $fechamodificacion
     *
     * @return Perfilempresa
     */
    public function setFechamodificacion($fechamodificacion)
    {
        $this->fechamodificacion = $fechamodificacion;

        return $this;
    }

    /**
     * Get fechamodificacion
     *
     * @return \DateTime
     */
    public function getFechamodificacion()
    {
        return $this->fechamodificacion;
    }

    /**
     * Set idusuario
     *
     * @param \AppBundle\Entity\Usuarios $idusuario
     *
     * @return Perfilempresa
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rrss;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rrss = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set web
     *
     * @param string $web
     *
     * @return Perfilempresa
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
     * @return Perfilempresa
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
     * Set personacontacto
     *
     * @param string $personacontacto
     *
     * @return Perfilempresa
     */
    public function setPersonacontacto($personacontacto)
    {
        $this->personacontacto = $personacontacto;

        return $this;
    }

    /**
     * Get personacontacto
     *
     * @return string
     */
    public function getPersonacontacto()
    {
        return $this->personacontacto;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Perfilempresa
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
     * @Assert\NotBlank()
     * @Assert\Regex(
     *      pattern="(^[A-Za-z\.]([\.a-zA-ZzäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙñ\. ]){3,40}$)",
     *      message="school.name"
     * )
     * @var string
     */
    private $nombreempresa;


    /**
     * Set nombreempresa
     *
     * @param string $nombreempresa
     *
     * @return Perfilempresa
     */
    public function setNombreempresa($nombreempresa)
    {
        $this->nombreempresa = $nombreempresa;

        return $this;
    }

    /**
     * Get nombreempresa
     *
     * @return string
     */
    public function getNombreempresa()
    {
        return $this->nombreempresa;
    }

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
    
    // Magic method to return this entity as String
    public function __toString() {
        return $this->nombreempresa;
    }

    /**
     * Set cif
     *
     * @param string $cif
     *
     * @return Perfilempresa
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Perfilempresa
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
