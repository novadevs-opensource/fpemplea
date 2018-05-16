<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * UserHasSn
 */
class UserHasSn
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @Assert\Url(
     *    message ="The url is not a valid url.",
     * )
     * @var string
     */
    private $snurl;

    /**
     * @var \AppBundle\Entity\Rrss
     */
    private $sn;

    /**
     * @var \AppBundle\Entity\Usuarios
     */
    private $user;


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
     * Set snurl
     *
     * @param string $snurl
     *
     * @return UserHasSn
     */
    public function setSnurl($snurl)
    {
        $this->snurl = $snurl;
    
        return $this;
    }

    /**
     * Get snurl
     *
     * @return string
     */
    public function getSnurl()
    {
        return $this->snurl;
    }

    /**
     * Set sn
     *
     * @param \AppBundle\Entity\Rrss $sn
     *
     * @return UserHasSn
     */
    public function setSn(\AppBundle\Entity\Rrss $sn = null)
    {
        $this->sn = $sn;
    
        return $this;
    }

    /**
     * Get sn
     *
     * @return \AppBundle\Entity\Rrss
     */
    public function getSn()
    {
        return $this->sn;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\Usuarios $user
     *
     * @return UserHasSn
     */
    public function setUser(\AppBundle\Entity\Usuarios $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Usuarios
     */
    public function getUser()
    {
        return $this->user;
    }
}
