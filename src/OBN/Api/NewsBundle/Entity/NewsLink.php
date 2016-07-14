<?php

namespace OBN\Api\NewsBundle\Entity;

use OBN\Api\NewsBundle\Entity\News;

/**
 * NewsLink
 */
class NewsLink
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
    private $url;

    /**
     * @var string
     */
    private $author;

    /**
     * @var bool
     */
    private $enabled;
    
     /**
     * @var \OBN\Api\NewsBundle\Entity\News
     */
    private $news;

        /**
     * Set news
     *
     * @param \OBN\Api\NewsBundle\Entity\News $news
     *
     * @return NewsLink
     */
    public function setNews(\OBN\Api\NewsBundle\Entity\News $news = null)
    {
        $this->news = $news;

        return $this;
    }

    /**
     * Get news
     *
     * @return \OBN\Api\NewsBundle\Entity\News
     */
    public function getNews()
    {
        return $this->news;
    }

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
     * @return NewsLink
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
     * Set url
     *
     * @param string $url
     *
     * @return NewsLink
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return NewsLink
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return NewsLink
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
}

