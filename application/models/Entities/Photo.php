<?php

namespace Entities;

/**
 * Entities\Photo
 */
class Photo
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $path
     */
    private $path;

    /**
     * @var text $description
     */
    private $description;

    /**
     * @var datetime $uploaded
     */
    private $uploaded;

    /**
     * @var integer $permission
     */
    private $permission;

    /**
     * @var float $longtitude
     */
    private $longtitude;

    /**
     * @var float $latitude
     */
    private $latitude;

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
     * Set path
     *
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * Get path
     *
     * @return string $path
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set uploaded
     *
     * @param datetime $uploaded
     */
    public function setUploaded($uploaded)
    {
        $this->uploaded = $uploaded;
    }

    /**
     * Get uploaded
     *
     * @return datetime $uploaded
     */
    public function getUploaded()
    {
        return $this->uploaded;
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
     * Set longtitude
     *
     * @param float $longtitude
     */
    public function setLongtitude($longtitude)
    {
        $this->longtitude = $longtitude;
    }

    /**
     * Get longtitude
     *
     * @return float $longtitude
     */
    public function getLongtitude()
    {
        return $this->longtitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * Get latitude
     *
     * @return float $latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
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