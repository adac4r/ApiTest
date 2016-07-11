<?php

namespace OBN\Api\CategoryBundle\Entity;

/**
 * Category
 */
class Category
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var guid
     */
    private $uid;

    /**
     * @var \stdClass
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $class;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $orderBy;

    /**
     * @var bool
     */
    private $enable;

    /**
     * @var string
     */
    private $color;

    /**
     * @var \stdClass
     */
    private $categoryMedia;

    /**
     * @var \stdClass
     */
    private $memberCategory;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set uid
     *
     * @param guid $uid
     *
     * @return Category
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return guid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set type
     *
     * @param \stdClass $type
     *
     * @return Category
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \stdClass
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set class
     *
     * @param string $class
     *
     * @return Category
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set orderBy
     *
     * @param integer $orderBy
     *
     * @return Category
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;

        return $this;
    }

    /**
     * Get orderBy
     *
     * @return int
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * Set enable
     *
     * @param boolean $enable
     *
     * @return Category
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Get enable
     *
     * @return bool
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Category
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set categoryMedia
     *
     * @param \stdClass $categoryMedia
     *
     * @return Category
     */
    public function setCategoryMedia($categoryMedia)
    {
        $this->categoryMedia = $categoryMedia;

        return $this;
    }

    /**
     * Get categoryMedia
     *
     * @return \stdClass
     */
    public function getCategoryMedia()
    {
        return $this->categoryMedia;
    }

    /**
     * Set memberCategory
     *
     * @param \stdClass $memberCategory
     *
     * @return Category
     */
    public function setMemberCategory($memberCategory)
    {
        $this->memberCategory = $memberCategory;

        return $this;
    }

    /**
     * Get memberCategory
     *
     * @return \stdClass
     */
    public function getMemberCategory()
    {
        return $this->memberCategory;
    }
}

