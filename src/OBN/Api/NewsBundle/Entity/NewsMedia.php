<?php

namespace OBN\Api\NewsBundle\Entity;

/**
 * NewsMedia
 */
class NewsMedia
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
     * @var string
     */
    private $pathKey;

    /**
     * @var \stdClass
     */
    private $mediaType;

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
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var bool
     */
    private $enabled;

    /**
     * @var int
     */
    private $orderBy;

    /**
     * @var \stdClass
     */
    private $effect;

    /**
     * @var \stdClass
     */
    private $rotate;

    /**
     * @var bool
     */
    private $isPrimary;

    /**
     * @var \stdClass
     */
    private $xPosition;

    /**
     * @var \stdClass
     */
    private $yPosition;

    /**
     * @var \stdClass
     */
    private $mediaMimeType;

    /**
     * @var string
     */
    private $awsJobId;

    /**
     * @var \stdClass
     */
    private $news;


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
     * @return NewsMedia
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
     * Set pathKey
     *
     * @param string $pathKey
     *
     * @return NewsMedia
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
     * Set mediaType
     *
     * @param \stdClass $mediaType
     *
     * @return NewsMedia
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
     * Set identification
     *
     * @param string $identification
     *
     * @return NewsMedia
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
     * @return NewsMedia
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
     * @return NewsMedia
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return NewsMedia
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
     * @return NewsMedia
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
     * Set orderBy
     *
     * @param integer $orderBy
     *
     * @return NewsMedia
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
     * Set effect
     *
     * @param \stdClass $effect
     *
     * @return NewsMedia
     */
    public function setEffect($effect)
    {
        $this->effect = $effect;

        return $this;
    }

    /**
     * Get effect
     *
     * @return \stdClass
     */
    public function getEffect()
    {
        return $this->effect;
    }

    /**
     * Set rotate
     *
     * @param \stdClass $rotate
     *
     * @return NewsMedia
     */
    public function setRotate($rotate)
    {
        $this->rotate = $rotate;

        return $this;
    }

    /**
     * Get rotate
     *
     * @return \stdClass
     */
    public function getRotate()
    {
        return $this->rotate;
    }

    /**
     * Set isPrimary
     *
     * @param boolean $isPrimary
     *
     * @return NewsMedia
     */
    public function setIsPrimary($isPrimary)
    {
        $this->isPrimary = $isPrimary;

        return $this;
    }

    /**
     * Get isPrimary
     *
     * @return bool
     */
    public function getIsPrimary()
    {
        return $this->isPrimary;
    }

    /**
     * Set xPosition
     *
     * @param \stdClass $xPosition
     *
     * @return NewsMedia
     */
    public function setXPosition($xPosition)
    {
        $this->xPosition = $xPosition;

        return $this;
    }

    /**
     * Get xPosition
     *
     * @return \stdClass
     */
    public function getXPosition()
    {
        return $this->xPosition;
    }

    /**
     * Set yPosition
     *
     * @param \stdClass $yPosition
     *
     * @return NewsMedia
     */
    public function setYPosition($yPosition)
    {
        $this->yPosition = $yPosition;

        return $this;
    }

    /**
     * Get yPosition
     *
     * @return \stdClass
     */
    public function getYPosition()
    {
        return $this->yPosition;
    }

    /**
     * Set mediaMimeType
     *
     * @param \stdClass $mediaMimeType
     *
     * @return NewsMedia
     */
    public function setMediaMimeType($mediaMimeType)
    {
        $this->mediaMimeType = $mediaMimeType;

        return $this;
    }

    /**
     * Get mediaMimeType
     *
     * @return \stdClass
     */
    public function getMediaMimeType()
    {
        return $this->mediaMimeType;
    }

    /**
     * Set awsJobId
     *
     * @param string $awsJobId
     *
     * @return NewsMedia
     */
    public function setAwsJobId($awsJobId)
    {
        $this->awsJobId = $awsJobId;

        return $this;
    }

    /**
     * Get awsJobId
     *
     * @return string
     */
    public function getAwsJobId()
    {
        return $this->awsJobId;
    }

    /**
     * Set news
     *
     * @param \stdClass $news
     *
     * @return NewsMedia
     */
    public function setNews($news)
    {
        $this->news = $news;

        return $this;
    }

    /**
     * Get news
     *
     * @return \stdClass
     */
    public function getNews()
    {
        return $this->news;
    }
}

