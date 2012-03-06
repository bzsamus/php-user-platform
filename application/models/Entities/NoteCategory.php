<?php

namespace Entities;

/**
 * Entities\NoteCategory
 */
class NoteCategory
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Entities\Note
     */
    private $note;

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
     * Set note
     *
     * @param Entities\Note $note
     */
    public function setNote(\Entities\Note $note)
    {
        $this->note = $note;
    }

    /**
     * Get note
     *
     * @return Entities\Note $note
     */
    public function getNote()
    {
        return $this->note;
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