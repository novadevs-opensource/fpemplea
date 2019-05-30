<?php

namespace AppBundle\Entity;

/**
 * EducationLevel
 */
class EducationLevel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $level;


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
     * Set level
     *
     * @param string $level
     *
     * @return EducationLevel
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    // Magic method to return this entity as String
    public function __toString() {
        return $this->level;
    }
}
