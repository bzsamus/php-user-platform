<?php

namespace Entities;

/**
 * Entities\Follow
 */
class Follow
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Entities\User
     */
    private $user;

    /**
     * @var Entities\User
     */
    private $follow;


    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param Entities\User $user
     */
    public function setUser(\Entities\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Entities\User $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set follow
     *
     * @param Entities\User $follow
     */
    public function setFollow(\Entities\User $follow)
    {
        $this->follow = $follow;
    }

    /**
     * Get follow
     *
     * @return Entities\User $follow
     */
    public function getFollow()
    {
        return $this->follow;
    }
}