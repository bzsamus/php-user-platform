<?php

namespace Entities;

/**
 * Entities\UserApp
 */
class UserApp
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $relations
     */
    private $relations;

    /**
     * @var datetime $added
     */
    private $added;

    /**
     * @var Entities\App
     */
    private $app;

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
     * Set relations
     *
     * @param integer $relations
     */
    public function setRelations($relations)
    {
        $this->relations = $relations;
    }

    /**
     * Get relations
     *
     * @return integer $relations
     */
    public function getRelations()
    {
        return $this->relations;
    }

    /**
     * Set added
     *
     * @param datetime $added
     */
    public function setAdded($added)
    {
        $this->added = $added;
    }

    /**
     * Get added
     *
     * @return datetime $added
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * Set app
     *
     * @param Entities\App $app
     */
    public function setApp(\Entities\App $app)
    {
        $this->app = $app;
    }

    /**
     * Get app
     *
     * @return Entities\App $app
     */
    public function getApp()
    {
        return $this->app;
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