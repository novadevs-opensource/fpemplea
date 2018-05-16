<?php

namespace AppBundle\Entity;

/**
 * Alert
 */
class Alert
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $alertsubject;

    /**
     * @var string
     */
    private $alertbody;

    /**
     * @var \DateTime
     */
    private $generationdate;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var \AppBundle\Entity\Usuarios
     */
    private $userid;


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
     * Set alertsubject
     *
     * @param string $alertsubject
     *
     * @return Alert
     */
    public function setAlertsubject($alertsubject)
    {
        $this->alertsubject = $alertsubject;
    
        return $this;
    }

    /**
     * Get alertsubject
     *
     * @return string
     */
    public function getAlertsubject()
    {
        return $this->alertsubject;
    }

    /**
     * Set alertbody
     *
     * @param string $alertbody
     *
     * @return Alert
     */
    public function setAlertbody($alertbody)
    {
        $this->alertbody = $alertbody;
    
        return $this;
    }

    /**
     * Get alertbody
     *
     * @return string
     */
    public function getAlertbody()
    {
        return $this->alertbody;
    }

    /**
     * Set generationdate
     *
     * @param \DateTime $generationdate
     *
     * @return Alert
     */
    public function setGenerationdate($generationdate)
    {
        $this->generationdate = $generationdate;
    
        return $this;
    }

    /**
     * Get generationdate
     *
     * @return \DateTime
     */
    public function getGenerationdate()
    {
        return $this->generationdate;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Alert
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set userid
     *
     * @param \AppBundle\Entity\Usuarios $userid
     *
     * @return Alert
     */
    public function setUserid(\AppBundle\Entity\Usuarios $userid = null)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return \AppBundle\Entity\Usuarios
     */
    public function getUserid()
    {
        return $this->userid;
    }

    // Magic method to return this entity as String
    public function __toString() {
        return $this->alertbody;
    }
}
