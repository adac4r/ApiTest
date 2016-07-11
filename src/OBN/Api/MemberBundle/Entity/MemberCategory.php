<?php

namespace OBN\Api\MemberBundle\Entity;

/**
 * MemberCategory
 */
class MemberCategory
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $visible;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var guid
     */
    private $uid;

    /**
     * @var \stdClass
     */
    private $member;

    /**
     * @var \stdClass
     */
    private $category;


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
     * Set visible
     *
     * @param boolean $visible
     *
     * @return MemberCategory
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return MemberCategory
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set uid
     *
     * @param guid $uid
     *
     * @return MemberCategory
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
     * Set member
     *
     * @param \stdClass $member
     *
     * @return MemberCategory
     */
    public function setMember($member)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return \stdClass
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set category
     *
     * @param \stdClass $category
     *
     * @return MemberCategory
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \stdClass
     */
    public function getCategory()
    {
        return $this->category;
    }
}

