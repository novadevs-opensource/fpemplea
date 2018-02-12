<?php

namespace AppBundle\Entity;

/**
 * SkillCategory
 */
class SkillCategory
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $category;


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
     * Set category
     *
     * @param string $category
     *
     * @return SkillCategory
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    // Magic method to return this entity as String
    public function __toString() {
        return $this->category;
    }
}
