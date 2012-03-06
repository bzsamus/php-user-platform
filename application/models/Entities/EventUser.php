<?php

namespace Entities;

/**
 * Entities\EventUser
 */
class EventUser
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var datetime $joined
     */
    private $joined;

    /**
     * @var text $message
     */
    private $message;

    /**
     * @var Entities\Event
     */
    private $event;

    /**
     * @var Entities\User
     */
    private $user;


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
     * Set joined
     *
     * @param datetime $joined
     */
    public function setJoined($joined)
    {
        $this->joined = $joined;
    }

    /**
     * Get joined
     *
     * @return datetime $joined
     */
    public function getJoined()
    {
        return $this->joined;
    }

    /**
     * Set message
     *
     * @param text $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Get message
     *
     * @return text $message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set event
     *
     * @param Entities\Event $event
     */
    public function setEvent(\Entities\Event $event)
    {
        $this->event = $event;
    }

    /**
     * Get event
     *
     * @return Entities\Event $event
     */
    public function getEvent()
    {
        return $this->event;
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
}