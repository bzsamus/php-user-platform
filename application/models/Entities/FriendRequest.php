<?php

namespace Entities;

/**
 * Entities\FriendRequest
 */
class FriendRequest
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var datetime $request_time
     */
    private $request_time;

    /**
     * @var smallint $complete
     */
    private $complete;

    /**
     * @var Entities\User
     */
    private $from;

    /**
     * @var Entities\User
     */
    private $to;


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
     * Set request_time
     *
     * @param datetime $requestTime
     */
    public function setRequestTime($requestTime)
    {
        $this->request_time = $requestTime;
    }

    /**
     * Get request_time
     *
     * @return datetime $requestTime
     */
    public function getRequestTime()
    {
        return $this->request_time;
    }

    /**
     * Set complete
     *
     * @param smallint $complete
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;
    }

    /**
     * Get complete
     *
     * @return smallint $complete
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * Set from
     *
     * @param Entities\User $from
     */
    public function setFrom(\Entities\User $from)
    {
        $this->from = $from;
    }

    /**
     * Get from
     *
     * @return Entities\User $from
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set to
     *
     * @param Entities\User $to
     */
    public function setTo(\Entities\User $to)
    {
        $this->to = $to;
    }

    /**
     * Get to
     *
     * @return Entities\User $to
     */
    public function getTo()
    {
        return $this->to;
    }
}