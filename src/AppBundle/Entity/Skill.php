<?php

namespace AppBundle\Entity;

/**
 * Skill
 */
class Skill
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $parent;

    /**
     * @var string
     */
    private $skill;

    /**
     * @var \AppBundle\Entity\SkillCategory
     */
    private $skillCategory;

    /**
     * @var \AppBundle\Entity\Categorias
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
     * Set parent
     *
     * @param integer $parent
     *
     * @return Skill
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return integer
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set skill
     *
     * @param string $skill
     *
     * @return Skill
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;
    
        return $this;
    }

    /**
     * Get skill
     *
     * @return string
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\SkillCategory $category
     *
     * @return Skill
     */
    public function setCategory(\AppBundle\Entity\Categorias $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\SkillCategory
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Set skillCategory
     *
     * @param \AppBundle\Entity\SkillCategory $skillCategory
     *
     * @return Skill
     */
    public function setSkillCategory(\AppBundle\Entity\SkillCategory $skillCategory = null)
    {
        $this->skillCategory = $skillCategory;

        return $this;
    }

    /**
     * Get skillCategory
     *
     * @return \AppBundle\Entity\SkillCategory
     */
    public function getSkillCategory()
    {
        return $this->skillCategory;
    }

    //Metodo MAGICO creado para devolver el nombre de la categoria
    public function __toString() {
        return $this->skill;
    }
}
