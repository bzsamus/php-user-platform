<?php

namespace Entities;

/**
 * Entities\User
 */
class User
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $profile_id
     */
    private $profile_id;

    /**
     * @var string $password
     */
    private $password;

    /**
     * @var string $firstName
     */
    private $firstName;

    /**
     * @var string $lastName
     */
    private $lastName;

    /**
     * @var integer $role
     */
    private $role;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var datetime $created
     */
    private $created;

    /**
     * @var datetime $last_login
     */
    private $last_login;

    /**
     * @var string $ip
     */
    private $ip;

    /**
     * @var float $longtitude
     */
    private $longtitude;

    /**
     * @var float $latitude
     */
    private $latitude;

    /**
     * @var string $fbid
     */
    private $fbid;

    /**
     * @var Entities\UserProfile
     */
    private $profile;


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
     * Set profile_id
     *
     * @param integer $profileId
     */
    public function setProfileId($profileId)
    {
        $this->profile_id = $profileId;
    }

    /**
     * Get profile_id
     *
     * @return integer $profileId
     */
    public function getProfileId()
    {
        return $this->profile_id;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set role
     *
     * @param integer $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * Get role
     *
     * @return integer $role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
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
     * Set last_login
     *
     * @param datetime $lastLogin
     */
    public function setLastLogin($lastLogin)
    {
        $this->last_login = $lastLogin;
    }

    /**
     * Get last_login
     *
     * @return datetime $lastLogin
     */
    public function getLastLogin()
    {
        return $this->last_login;
    }

    /**
     * Set ip
     *
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * Get ip
     *
     * @return string $ip
     */
    public function getIp()
    {
        return $this->ip;
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
     * Set fbid
     *
     * @param string $fbid
     */
    public function setFbid($fbid)
    {
        $this->fbid = $fbid;
    }

    /**
     * Get fbid
     *
     * @return string $fbid
     */
    public function getFbid()
    {
        return $this->fbid;
    }

    /**
     * Set profile
     *
     * @param Entities\UserProfile $profile
     */
    public function setProfile(\Entities\UserProfile $profile)
    {
        $this->profile = $profile;
    }

    /**
     * Get profile
     *
     * @return Entities\UserProfile $profile
     */
    public function getProfile()
    {
        return $this->profile;
    }
}