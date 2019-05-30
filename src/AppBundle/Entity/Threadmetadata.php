<?php

namespace AppBundle\Entity;

/**
 * Threadmetadata
 */
class Threadmetadata
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $isDeleted;

    /**
     * @var \DateTime
     */
    private $lastParticipantMessageDate;

    /**
     * @var \DateTime
     */
    private $lastMessageDate;


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
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return Threadmetadata
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    
        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set lastParticipantMessageDate
     *
     * @param \DateTime $lastParticipantMessageDate
     *
     * @return Threadmetadata
     */
    public function setLastParticipantMessageDate($lastParticipantMessageDate)
    {
        $this->lastParticipantMessageDate = $lastParticipantMessageDate;
    
        return $this;
    }

    /**
     * Get lastParticipantMessageDate
     *
     * @return \DateTime
     */
    public function getLastParticipantMessageDate()
    {
        return $this->lastParticipantMessageDate;
    }

    /**
     * Set lastMessageDate
     *
     * @param \DateTime $lastMessageDate
     *
     * @return Threadmetadata
     */
    public function setLastMessageDate($lastMessageDate)
    {
        $this->lastMessageDate = $lastMessageDate;
    
        return $this;
    }

    /**
     * Get lastMessageDate
     *
     * @return \DateTime
     */
    public function getLastMessageDate()
    {
        return $this->lastMessageDate;
    }
}
