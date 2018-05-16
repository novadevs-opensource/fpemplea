<?php

namespace AppBundle\Entity;

/**
 * ValidatedUserIds
 */
class ValidatedUserIds
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     */
    private $appRole;


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
     * Set userId
     *
     * @param string $userId
     *
     * @return ValidatedUserIds
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set appRole
     *
     * @param string $appRole
     *
     * @return ValidatedUserIds
     */
    public function setAppRole($appRole)
    {
        $this->appRole = $appRole;

        return $this;
    }

    /**
     * Get appRole
     *
     * @return string
     */
    public function getAppRole()
    {
        return $this->appRole;
    }
}

