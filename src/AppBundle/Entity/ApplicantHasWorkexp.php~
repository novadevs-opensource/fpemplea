<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * ApplicantHasWorkexp
 */
class ApplicantHasWorkexp
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $workexp;

    /**
     * @var \DateTime
     */
    private $start;

    /**
     * @var \DateTime
     */
    private $end;

    /**
     * @var string
     */
    private $position;

    /**
     * @var \AppBundle\Entity\Perfilestudiante
     */
    private $applicant;

    /**
     * @var \AppBundle\Entity\Perfilempresa
     */
    private $company;


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
     * Set workexp
     *
     * @param string $workexp
     *
     * @return ApplicantHasWorkexp
     */
    public function setWorkexp($workexp)
    {
        $this->workexp = $workexp;
    
        return $this;
    }

    /**
     * Get workexp
     *
     * @return string
     */
    public function getWorkexp()
    {
        return $this->workexp;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return ApplicantHasWorkexp
     */
    public function setStart($start)
    {
        $this->start = $start;
    
        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return ApplicantHasWorkexp
     */
    public function setEnd($end)
    {
        $this->end = $end;
    
        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return ApplicantHasWorkexp
     */
    public function setPosition($position)
    {
        $this->position = $position;
    
        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set applicant
     *
     * @param \AppBundle\Entity\Perfilestudiante $applicant
     *
     * @return ApplicantHasWorkexp
     */
    public function setApplicant(\AppBundle\Entity\Perfilestudiante $applicant = null)
    {
        $this->applicant = $applicant;
    
        return $this;
    }

    /**
     * Get applicant
     *
     * @return \AppBundle\Entity\Perfilestudiante
     */
    public function getApplicant()
    {
        return $this->applicant;
    }

    /**
     * Set company
     *
     * @param \AppBundle\Entity\Perfilempresa $company
     *
     * @return ApplicantHasWorkexp
     */
    public function setCompany(\AppBundle\Entity\Perfilempresa $company = null)
    {
        $this->company = $company;
    
        return $this;
    }

    /**
     * Get company
     *
     * @return \AppBundle\Entity\Perfilempresa
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * @var string
     */
    private $otherCompany = '0';


    /**
     * Set otherCompany
     *
     * @param string $otherCompany
     *
     * @return ApplicantHasWorkexp
     */
    public function setOtherCompany($otherCompany)
    {
        $this->otherCompany = $otherCompany;

        return $this;
    }

    /**
     * Get otherCompany
     *
     * @return string
     */
    public function getOtherCompany()
    {
        return $this->otherCompany;
    }
}
