<?php

namespace Entities;

/**
 * Entities\Message
 */
class Message
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var text $content
     */
    private $content;

    /**
     * @var datetime $created
     */
    private $created;

    /**
     * @var integer $readed
     */
    private $readed;

    /**
     * @var Entities\User
     */
    private $from_user;

    /**
     * @var Entities\User
     */
    private $to_user;


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
     * Set content
     *
     * @param text $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return text $content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set created
     *
     * @param datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return datetime $created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set readed
     *
     * @param integer $readed
     */
    public function setReaded($readed)
    {
        $this->readed = $readed;
    }

    /**
     * Get readed
     *
     * @return integer $readed
     */
    public function getReaded()
    {
        return $this->readed;
    }

    /**
     * Set from_user
     *
     * @param Entities\User $fromUser
     */
    public function setFromUser(\Entities\User $fromUser)
    {
        $this->from_user = $fromUser;
    }

    /**
     * Get from_user
     *
     * @return Entities\User $fromUser
     */
    public function getFromUser()
    {
        return $this->from_user;
    }

    /**
     * Set to_user
     *
     * @param Entities\User $toUser
     */
    public function setToUser(\Entities\User $toUser)
    {
        $this->to_user = $toUser;
    }

    /**
     * Get to_user
     *
     * @return Entities\User $toUser
     */
    public function getToUser()
    {
        return $this->to_user;
    }
}