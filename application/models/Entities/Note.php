<?php

namespace Entities;

/**
 * Entities\Note
 */
class Note
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var string $content
     */
    private $content;

    /**
     * @var datetime $created
     */
    private $created;

    /**
     * @var integer $permission
     */
    private $permission;

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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return string $content
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
     * Set permission
     *
     * @param integer $permission
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
    }

    /**
     * Get permission
     *
     * @return integer $permission
     */
    public function getPermission()
    {
        return $this->permission;
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