<?php

namespace OBN\Api\MemberBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Member
 */
class Member extends BaseUser
{

    /**
     * @var integer
     */
    private $publishedNews;

    /**
     * @return int
     */
    public function getPublishedNews()
    {
        return $this->publishedNews;
    }

    /**
     * @param int $publishedNews
     */
    public function setPublishedNews($publishedNews)
    {
        $this->publishedNews = $publishedNews;
    }
    
    /** Entity start here */
    
    /**
     * @var int
     */
    protected $id;

    /**
     * @var guid
     */
    private $uid;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var \DateTime
     */
    private $birthdate;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $language;

       /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $news;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $newsRate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * */
     private $memberCategory;
     
     
     /**
      * get MemberCategory
      * @return MemberCategory
      * */
      public function getMember()
      {
          return $this->memberCategory;
      }
      
      /**
       * Set MemberCategory
       * @param Member $memberCategory
       * @return MemberCategory
       * */
       public function setMember($memberCategory)
       {
           $this->memberCategory = $memberCategory;
           return $this;
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
     * @return Member
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Member
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Member
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Member
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Member
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
     * Set color
     *
     * @param string $color
     *
     * @return Member
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
     * Set language
     *
     * @param string $language
     *
     * @return Member
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
}

