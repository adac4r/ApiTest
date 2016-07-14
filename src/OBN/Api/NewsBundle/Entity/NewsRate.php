<?php

namespace OBN\Api\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsRate
 */
class NewsRate
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $rate = 1;

    /**
     * @var \DateTime
     */
    private $dateRate;

    /**
     * @var boolean
     */
    private $enabled = true;

    /**
     * @var \OBN\Api\NewsBundle\Entity\News
     */
    private $news;

    /**
     * @var \OBN\Api\MemberBundle\Entity\Member
     */
    private $member;

    /**
     * @var \OBN\Api\CategoryBundle\Entity\Category
     */
    private $category;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rate
     *
     * @param integer $rate
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
     * @return integer
     */
    public function getRate()
    {
        $sumRates = 0;
        foreach ($this->rate as $rate) {
            $sumRates += $rate;
        }
        return $sumRates;
    }

    /**
     * Set date_rate
     *
     * @param \DateTime $dateRate
     * @return NewsRate
     */
    public function setDateRate($dateRate)
    {
        $this->date_rate = $dateRate;

        return $this;
    }

    /**
     * Get date_rate
     *
     * @return \DateTime
     */
    public function getDateRate()
    {
        return $this->date_rate;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
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
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set news
     *
     * @param \OBN\Api\NewsBundle\Entity\News $news
     * @return NewsRate
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
     * Set member
     *
     * @param \OBN\Api\MemberBundle\Entity\Member $member
     * @return NewsRate
     */
    public function setMember(\OBN\Api\MemberBundle\Entity\Member $member)
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

    /**
     * @return \OBN\Api\CategoryBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param \OBN\Api\CategoryBundle\Entity\Category $category
     * @return NewsRate
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

}
