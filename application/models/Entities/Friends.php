<?php

namespace Entities;

/**
 * Entities\Friends
 */
class Friends
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
    private $friend;


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
     * Set friend
     *
     * @param Entities\User $friend
     */
    public function setFriend(\Entities\User $friend)
    {
        $this->friend = $friend;
    }

    /**
     * Get friend
     *
     * @return Entities\User $friend
     */
    public function getFriend()
    {
        return $this->friend;
    }
}