<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Perfilestudiante
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExtendedSearchRepository")
 */
class Perfilestudiante
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @Assert\Regex(
     *      pattern="(^[A-Za-z ]([ A-Za-zZzäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙñ]){3,21}$)",
     *      message="applicant.name"
     * )
     * @var string
     */
    private $nombre;

    /**
     * @Assert\NotBlank()
     * @Assert\Regex(
     *      pattern="(^[A-Za-z ]([ A-Za-zZzäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙñ]){3,21}$)",
     *      message="applicant.lastname"
     * )
     * @var string
     */
    private $apellidos;

    /**
     * @Assert\NotBlank()
     * @Assert\Regex(
     *      pattern="(^[0-9A-Za-z][0-9]{7}[A-Za-z])",  
     *      message="applicant.nif"
     * )
     * @var string
     */
    private $dni;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @Assert\Regex(
     *      pattern="(^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$)",  
     *      message="applicant.zipcode"
     * )
     * @var integer
     */
    private $cp;

    /**
     * @var string
     */
    private $localidad;

    /**
     * @Assert\Regex(
     *      pattern="(^[A-Z]([a-zZzäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙñA-Z]){3,21}$)",
     *      message="applicant.pais"
     * )
     * @var string
     */
    private $pais;

    /**
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min="now",
     *      minMessage="Tu disponibilidad no puede ser anterior al día de hoy",
     * )
     * @var \Date
     */
    private $diponibilidad;

    /**
     * @Assert\Regex(
     *      pattern="(^[a-zA-Z0-9áéíóúÁÉÍÓÚ ]{1,500}$)",
     *      message="applicant.hobbies"
     * )
     * @var string
     */
    private $intereses;

    /**
     * @var string
     */
    private $cvpdf;

    /**
     * @Assert\Regex(
     *      pattern="(^[a-zA-Z0-9áéíóúÁÉÍÓÚ ]{1,1500}$)",
     *      message="applicant.cvtxt"
     * )
     * @var string
     */
    private $cvtxt;

    /**
     * @var string
     */
    private $sectorprofesional;

    /**
     * @var boolean
     */
    private $fexibilidadgeografica = false;

    /**
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min="-50 years",
     *      minMessage="¿Tu edad es correcta?",
     *      max="-18 years",
     *      maxMessage="applicant.birthdate"
     * )
     * @var \Date
     */
    private $fechanacimiento;

    /**
     * @var \AppBundle\Entity\Usuarios
     */
    private $idusuario;

    /**
     * @Assert\Regex(
     *      pattern="(^[9|6|7][0-9]{8}$)",
     *      message="applicant.mobilephone"
     *)
     * @var string
     */
    private $telefonouno;

    /**
     * @Assert\Regex(
     *      pattern="(^(\+34|0034|34)?[6|7|9][0-9]{8}$)",
     *      message="applicant.mainphone"
     *)
     * @var string
     */
    private $telefonodos;

    /**
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "applicant.email",
     *     checkMX = true
     * )
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var integer
     */
    private $public = '1';

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
     * Set dni
     *
     * @param string $dni
     *
     * @return Perfilestudiante
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Perfilestudiante
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
     * @return Perfilestudiante
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
     * @return Perfilestudiante
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
     * @return Perfilestudiante
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
     * Set diponibilidad
     *
     * @param \Date $diponibilidad
     *
     * @return Perfilestudiante
     */
    public function setDiponibilidad($diponibilidad)
    {
        $this->diponibilidad = $diponibilidad;

        return $this;
    }

    /**
     * Get diponibilidad
     *
     * @return \Date
     */
    public function getDiponibilidad()
    {
        return $this->diponibilidad;
    }

    /**
     * Set intereses
     *
     * @param string $intereses
     *
     * @return Perfilestudiante
     */
    public function setIntereses($intereses)
    {
        $this->intereses = $intereses;

        return $this;
    }

    /**
     * Get intereses
     *
     * @return string
     */
    public function getIntereses()
    {
        return $this->intereses;
    }

    /**
     * Set cvpdf
     *
     * @param string $cvpdf
     *
     * @return Perfilestudiante
     */
    public function setCvpdf($cvpdf)
    {
        $this->cvpdf = $cvpdf;

        return $this;
    }

    /**
     * Get cvpdf
     *
     * @return string
     */
    public function getCvpdf()
    {
        return $this->cvpdf;
    }

    /**
     * Set cvtxt
     *
     * @param string $cvtxt
     *
     * @return Perfilestudiante
     */
    public function setCvtxt($cvtxt)
    {
        $this->cvtxt = $cvtxt;

        return $this;
    }

    /**
     * Get cvtxt
     *
     * @return string
     */
    public function getCvtxt()
    {
        return $this->cvtxt;
    }

    /**
     * Set sectorprofesional
     *
     * @param string $sectorprofesional
     *
     * @return Perfilestudiante
     */
    public function setSectorprofesional($sectorprofesional)
    {
        $this->sectorprofesional = $sectorprofesional;

        return $this;
    }

    /**
     * Get sectorprofesional
     *
     * @return string
     */
    public function getSectorprofesional()
    {
        return $this->sectorprofesional;
    }

    /**
     * Set fexibilidadgeografica
     *
     * @param boolean $fexibilidadgeografica
     *
     * @return Perfilestudiante
     */
    public function setFexibilidadgeografica($fexibilidadgeografica)
    {
        $this->fexibilidadgeografica = $fexibilidadgeografica;

        return $this;
    }

    /**
     * Get fexibilidadgeografica
     *
     * @return boolean
     */
    public function getFexibilidadgeografica()
    {
        return $this->fexibilidadgeografica;
    }

    /**
     * Set fechanacimiento
     *
     * @param \Date $fechanacimiento
     *
     * @return Perfilestudiante
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return \Date
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set idusuario
     *
     * @param \AppBundle\Entity\Usuarios $idusuario
     *
     * @return Perfilestudiante
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Perfilestudiante
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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Perfilestudiante
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
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

    /**
     * Set telefonouno
     *
     * @param string $telefonouno
     *
     * @return Perfilestudiante
     */
    public function setTelefonouno($telefonouno)
    {
        $this->telefonouno = $telefonouno;

        return $this;
    }

    /**
     * Get telefonouno
     *
     * @return string
     */
    public function getTelefonouno()
    {
        return $this->telefonouno;
    }

    /**
     * Set telefonodos
     *
     * @param string $telefonodos
     *
     * @return Perfilestudiante
     */
    public function setTelefonodos($telefonodos)
    {
        $this->telefonodos = $telefonodos;

        return $this;
    }

    /**
     * Get telefonodos
     *
     * @return string
     */
    public function getTelefonodos()
    {
        return $this->telefonodos;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Perfilestudiante
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
     * Set public
     *
     * @param integer $public
     *
     * @return Perfilestudiante
     */
    public function setPublic($public)
    {
        $this->public = $public;
    
        return $this;
    }

    /**
     * Get public
     *
     * @return integer
     */
    public function getPublic()
    {
        return $this->public;
    }
    
    // Magic method to return this entity as String
    public function __toString() {
        return $this->nombre;
    }

    /**
     * Get paginatePosts
     *
     * @return string
     */
    public function getPaginatePosts($pageSize=3,$currentPage){
        $em=$this->getEntityManager();
         
        //Consulta DQL
        $dql = "SELECT p FROM AppBundle\Entity\Perfilestudiante p ORDER BY p.id DESC";
        $query = $em->createQuery($dql)
                               ->setFirstResult($pageSize * ($currentPage - 1))
                               ->setMaxResults($pageSize);
 
        $paginator = new Paginator($query, $fetchJoinCollection = true);
 
        return $paginator;
    }
}
