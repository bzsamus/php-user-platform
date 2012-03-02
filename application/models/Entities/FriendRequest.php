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
     * @var integer $fromuid
     */
    private $fromuid;

    /**
     * @var integer $touid
     */
    private $touid;

    /**
     * @var datetime $request_time
     */
    private $request_time;


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
     * Set fromuid
     *
     * @param integer $fromuid
     */
    public function setFromuid($fromuid)
    {
        $this->fromuid = $fromuid;
    }

    /**
     * Get fromuid
     *
     * @return integer $fromuid
     */
    public function getFromuid()
    {
        return $this->fromuid;
    }

    /**
     * Set touid
     *
     * @param integer $touid
     */
    public function setTouid($touid)
    {
        $this->touid = $touid;
    }

    /**
     * Get touid
     *
     * @return integer $touid
     */
    public function getTouid()
    {
        return $this->touid;
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
}