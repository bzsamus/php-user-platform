<?php

namespace Entities;

/**
 * Entities\UserProfile
 */
class UserProfile
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $profile_pic
     */
    private $profile_pic;

    /**
     * @var string $location
     */
    private $location;

    /**
     * @var string $gender
     */
    private $gender;

    /**
     * @var string $about
     */
    private $about;


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
     * Set profile_pic
     *
     * @param string $profilePic
     */
    public function setProfilePic($profilePic)
    {
        $this->profile_pic = $profilePic;
    }

    /**
     * Get profile_pic
     *
     * @return string $profilePic
     */
    public function getProfilePic()
    {
        return $this->profile_pic;
    }

    /**
     * Set location
     *
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Get location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set gender
     *
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Get gender
     *
     * @return string $gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set about
     *
     * @param string $about
     */
    public function setAbout($about)
    {
        $this->about = $about;
    }

    /**
     * Get about
     *
     * @return string $about
     */
    public function getAbout()
    {
        return $this->about;
    }
}