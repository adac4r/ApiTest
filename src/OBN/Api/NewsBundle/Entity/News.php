<?php

namespace OBN\Api\NewsBundle\Entity;

/**
 * News
 */
class News
{
        /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $links;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $medias;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rates;

    /**
     * @var \OBN\Api\CategoryBundle\Entity\Category
     */
    private $category;

    /**
     * @var \OBN\Api\MemberBundle\Entity\Member
     */
    private $member;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->links = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->rates = new \Doctrine\Common\Collections\ArrayCollection();
    }

    
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
     * @var \stdClass
     */
    private $status;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $publicPath;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var bool
     */
    private $enabled;

    /**
     * @var bool
     */
    private $canBeRated;

    /**
     * @var bool
     */
    private $stared;


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
     * @return News
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
     * @return News
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
     * Set status
     *
     * @param \stdClass $status
     *
     * @return News
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \stdClass
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return News
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return News
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set publicPath
     *
     * @param string $publicPath
     *
     * @return News
     */
    public function setPublicPath($publicPath)
    {
        $this->publicPath = $publicPath;

        return $this;
    }

    /**
     * Get publicPath
     *
     * @return string
     */
    public function getPublicPath()
    {
        return $this->publicPath;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return News
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
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return News
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set canBeRated
     *
     * @param boolean $canBeRated
     *
     * @return News
     */
    public function setCanBeRated($canBeRated)
    {
        $this->canBeRated = $canBeRated;

        return $this;
    }

    /**
     * Get canBeRated
     *
     * @return bool
     */
    public function getCanBeRated()
    {
        return $this->canBeRated;
    }

    /**
     * Set stared
     *
     * @param boolean $stared
     *
     * @return News
     */
    public function setStared($stared)
    {
        $this->stared = $stared;

        return $this;
    }

    /**
     * Get stared
     *
     * @return bool
     */
    public function getStared()
    {
        return $this->stared;
    }
    
        /**
     * Add link
     *
     * @param \OBN\Api\NewsBundle\Entity\NewsLink $link
     *
     * @return News
     */
    public function addLink(\OBN\Api\NewsBundle\Entity\NewsLink $link)
    {
        $this->links[] = $link;

        return $this;
    }

    /**
     * Remove link
     *
     * @param \OBN\Api\NewsBundle\Entity\NewsLink $link
     */
    public function removeLink(\OBN\Api\NewsBundle\Entity\NewsLink $link)
    {
        $this->links->removeElement($link);
    }

    /**
     * Get links
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Add media
     *
     * @param \OBN\Api\NewsBundle\Entity\NewsMedia $media
     *
     * @return News
     */
    public function addMedia(\OBN\Api\NewsBundle\Entity\NewsMedia $media)
    {
        $this->medias[] = $media;

        return $this;
    }

    /**
     * Remove media
     *
     * @param \OBN\Api\NewsBundle\Entity\NewsMedia $media
     */
    public function removeMedia(\OBN\Api\NewsBundle\Entity\NewsMedia $media)
    {
        $this->medias->removeElement($media);
    }

    /**
     * Get medias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedias()
    {
        return $this->medias;
    }
    
        /**
     * Add rate
     *
     * @param \OBN\Api\NewsBundle\Entity\NewsRate $rate
     *
     * @return News
     */
    public function addRate(\OBN\Api\NewsBundle\Entity\NewsRate $rate)
    {
        $this->rates[] = $rate;

        return $this;
    }

    /**
     * Remove rate
     *
     * @param \OBN\Api\NewsBundle\Entity\NewsRate $rate
     */
    public function removeRate(\OBN\Api\NewsBundle\Entity\NewsRate $rate)
    {
        $this->rates->removeElement($rate);
    }

    /**
     * Get rates
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * Set category
     *
     * @param \OBN\Api\CategoryBundle\Entity\Category $category
     *
     * @return News
     */
    public function setCategory(\OBN\Api\CategoryBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \OBN\Api\CategoryBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set member
     *
     * @param \OBN\Api\MemberBundle\Entity\Member $member
     *
     * @return News
     */
    public function setMember(\OBN\Api\MemberBundle\Entity\Member $member = null)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return \OBN\Api\MemberBundle\Entity\Member
     */
    public function getMember()
    {
        return $this->member;
    }
}

