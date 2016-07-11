<?php

namespace OBN\Api\NewsBundle\Entity;

/**
 * NewsRate
 */
class NewsRate
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $rate;

    /**
     * @var \DateTime
     */
    private $dateRate;

    /**
     * @var bool
     */
    private $enabled;

    /**
     * @var \stdClass
     */
    private $news;

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
     * Set rate
     *
     * @param integer $rate
     *
     * @return NewsRate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return int
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set dateRate
     *
     * @param \DateTime $dateRate
     *
     * @return NewsRate
     */
    public function setDateRate($dateRate)
    {
        $this->dateRate = $dateRate;

        return $this;
    }

    /**
     * Get dateRate
     *
     * @return \DateTime
     */
    public function getDateRate()
    {
        return $this->dateRate;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return NewsRate
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
     * Set news
     *
     * @param \stdClass $news
     *
     * @return NewsRate
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

    /**
     * Set category
     *
     * @param \stdClass $category
     *
     * @return NewsRate
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

