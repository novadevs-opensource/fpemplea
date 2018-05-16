<?php

namespace AppBundle\Entity;

/**
 * EducationHasLevel
 */
class EducationHasLevel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Formacion
     */
    private $education;

    /**
     * @var \AppBundle\Entity\EducationLevel
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
     * Set education
     *
     * @param \AppBundle\Entity\Formacion $education
     *
     * @return EducationHasLevel
     */
    public function setEducation(\AppBundle\Entity\Formacion $education = null)
    {
        $this->education = $education;
    
        return $this;
    }

    /**
     * Get education
     *
     * @return \AppBundle\Entity\Formacion
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set level
     *
     * @param \AppBundle\Entity\EducationLevel $level
     *
     * @return EducationHasLevel
     */
    public function setLevel(\AppBundle\Entity\EducationLevel $level = null)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return \AppBundle\Entity\EducationLevel
     */
    public function getLevel()
    {
        return $this->level;
    }
}
