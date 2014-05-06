<?php

namespace Rick\BabyBundle\Entity\Baby;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Profile
 */
class Profile
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var boolean
     */
    private $sex = '';

    /**
     * @var string
     */
    private $nameMeaning = '';

    /**
     * @var string
     */
    private $nameGeneratedBy = '';

    /**
     * @var string
     */
    private $nickName = '';

    /**
     * @var string
     */
    private $nickNameGeneratedBy = '';

    /**
     * @var boolean
     */
    private $bloodType = '';

    /**
     * @var integer
     */
    private $height = '';

    /**
     * @var float
     */
    private $weight = '';

    /**
     * @var \DateTime
     */
    private $birthday = '';

    /**
     * @var string
     */
    private $yearOfBirth = '';

    /**
     * @var \DateTime
     */
    private $lunarBirthday = '';

    /**
     * @var string
     */
    private $constellation = '';

    /**
     * @var integer
     */
    private $ageOfDad = '';

    /**
     * @var integer
     */
    private $ageOfMum = '';

    /**
     * @var string
     */
    private $hospital = '';

    /**
     * @var string
     */
    private $picture = '';

    /**
     * 虚拟文件
     *
     * @var string
     */
    private $file = '';


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
     * Set name
     *
     * @param string $name
     * @return Profile
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
     * Set sex
     *
     * @param boolean $sex
     * @return Profile
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return boolean 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set nameMeaning
     *
     * @param string $nameMeaning
     * @return Profile
     */
    public function setNameMeaning($nameMeaning)
    {
        $this->nameMeaning = $nameMeaning;

        return $this;
    }

    /**
     * Get nameMeaning
     *
     * @return string 
     */
    public function getNameMeaning()
    {
        return $this->nameMeaning;
    }

    /**
     * Set nameGeneratedBy
     *
     * @param string $nameGeneratedBy
     * @return Profile
     */
    public function setNameGeneratedBy($nameGeneratedBy)
    {
        $this->nameGeneratedBy = $nameGeneratedBy;

        return $this;
    }

    /**
     * Get nameGeneratedBy
     *
     * @return string 
     */
    public function getNameGeneratedBy()
    {
        return $this->nameGeneratedBy;
    }

    /**
     * Set nickName
     *
     * @param string $nickName
     * @return Profile
     */
    public function setNickName($nickName)
    {
        $this->nickName = $nickName;

        return $this;
    }

    /**
     * Get nickName
     *
     * @return string 
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     * Set nickNameGeneratedBy
     *
     * @param string $nickNameGeneratedBy
     * @return Profile
     */
    public function setNickNameGeneratedBy($nickNameGeneratedBy)
    {
        $this->nickNameGeneratedBy = $nickNameGeneratedBy;

        return $this;
    }

    /**
     * Get nickNameGeneratedBy
     *
     * @return string 
     */
    public function getNickNameGeneratedBy()
    {
        return $this->nickNameGeneratedBy;
    }

    /**
     * Set bloodType
     *
     * @param boolean $bloodType
     * @return Profile
     */
    public function setBloodType($bloodType)
    {
        $this->bloodType = $bloodType;

        return $this;
    }

    /**
     * Get bloodType
     *
     * @return boolean 
     */
    public function getBloodType()
    {
        return $this->bloodType;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return Profile
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight
     *
     * @param float $weight
     * @return Profile
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Profile
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set yearOfBirth
     *
     * @param string $yearOfBirth
     * @return Profile
     */
    public function setYearOfBirth($yearOfBirth)
    {
        $this->yearOfBirth = $yearOfBirth;

        return $this;
    }

    /**
     * Get yearOfBirth
     *
     * @return string 
     */
    public function getYearOfBirth()
    {
        return $this->yearOfBirth;
    }

    /**
     * Set lunarBirthday
     *
     * @param \DateTime $lunarBirthday
     * @return Profile
     */
    public function setLunarBirthday($lunarBirthday)
    {
        $this->lunarBirthday = $lunarBirthday;

        return $this;
    }

    /**
     * Get lunarBirthday
     *
     * @return \DateTime 
     */
    public function getLunarBirthday()
    {
        return $this->lunarBirthday;
    }

    /**
     * Set constellation
     *
     * @param string $constellation
     * @return Profile
     */
    public function setConstellation($constellation)
    {
        $this->constellation = $constellation;

        return $this;
    }

    /**
     * Get constellation
     *
     * @return string 
     */
    public function getConstellation()
    {
        return $this->constellation;
    }

    /**
     * Set ageOfDad
     *
     * @param integer $ageOfDad
     * @return Profile
     */
    public function setAgeOfDad($ageOfDad)
    {
        $this->ageOfDad = $ageOfDad;

        return $this;
    }

    /**
     * Get ageOfDad
     *
     * @return integer 
     */
    public function getAgeOfDad()
    {
        return $this->ageOfDad;
    }

    /**
     * Set ageOfMum
     *
     * @param integer $ageOfMum
     * @return Profile
     */
    public function setAgeOfMum($ageOfMum)
    {
        $this->ageOfMum = $ageOfMum;

        return $this;
    }

    /**
     * Get ageOfMum
     *
     * @return integer 
     */
    public function getAgeOfMum()
    {
        return $this->ageOfMum;
    }

    /**
     * Set hospital
     *
     * @param string $hospital
     * @return Profile
     */
    public function setHospital($hospital)
    {
        $this->hospital = $hospital;

        return $this;
    }

    /**
     * Get hospital
     *
     * @return string 
     */
    public function getHospital()
    {
        return $this->hospital;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Profile
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    public function getAbsolutePath()
    {
        return null === $this->picture
            ? null
            : $this->getUploadRootDir().'/'.$this->picture;
    }

    public function getWebPath()
    {
        return null === $this->picture
            ? null
            : $this->getUploadDir().'/'.$this->picture;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads';
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set file
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Upload the file
     */
    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the
        // target filename to move to
        $this->getFile()->move(
            $this->getUploadRootDir(),
            $this->getFile()->getClientOriginalName()
        );

        // set the path property to the filename where you've saved the file
        $this->setPicture($this->getWebPath() . $this->getFile()->getClientOriginalName());

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }
}
