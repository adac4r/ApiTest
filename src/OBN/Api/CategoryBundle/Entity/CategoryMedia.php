<?php

namespace OBN\Api\CategoryBundle\Entity;

/**
 * CategoryMedia
 */
class CategoryMedia
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
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \stdClass
     */
    private $mediaType;

    /**
     * @var string
     */
    private $pathKey;

    /**
     * @var string
     */
    private $identification;

    /**
     * @var string
     */
    private $fileExtension;

    /**
     * @var int
     */
    private $fileSize;

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
     * Set uid
     *
     * @param guid $uid
     *
     * @return CategoryMedia
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CategoryMedia
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
     * Set mediaType
     *
     * @param \stdClass $mediaType
     *
     * @return CategoryMedia
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;

        return $this;
    }

    /**
     * Get mediaType
     *
     * @return \stdClass
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * Set pathKey
     *
     * @param string $pathKey
     *
     * @return CategoryMedia
     */
    public function setPathKey($pathKey)
    {
        $this->pathKey = $pathKey;

        return $this;
    }

    /**
     * Get pathKey
     *
     * @return string
     */
    public function getPathKey()
    {
        return $this->pathKey;
    }

    /**
     * Set identification
     *
     * @param string $identification
     *
     * @return CategoryMedia
     */
    public function setIdentification($identification)
    {
        $this->identification = $identification;

        return $this;
    }

    /**
     * Get identification
     *
     * @return string
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * Set fileExtension
     *
     * @param string $fileExtension
     *
     * @return CategoryMedia
     */
    public function setFileExtension($fileExtension)
    {
        $this->fileExtension = $fileExtension;

        return $this;
    }

    /**
     * Get fileExtension
     *
     * @return string
     */
    public function getFileExtension()
    {
        return $this->fileExtension;
    }

    /**
     * Set fileSize
     *
     * @param integer $fileSize
     *
     * @return CategoryMedia
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Get fileSize
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Set category
     *
     * @param \stdClass $category
     *
     * @return CategoryMedia
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

