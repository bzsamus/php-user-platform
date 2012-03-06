<?php

namespace Entities;

/**
 * Entities\EventCategory
 */
class EventCategory
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Entities\Event
     */
    private $event;

    /**
     * @var Entities\Category
     */
    private $category;


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
     * Set category
     *
     * @param Entities\Category $category
     */
    public function setCategory(\Entities\Category $category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return Entities\Category $category
     */
    public function getCategory()
    {
        return $this->category;
    }
}