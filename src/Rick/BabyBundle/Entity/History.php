<?php

namespace Rick\BabyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * History
 */
class History
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $nowdate;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var float
     */
    private $height;

    /**
     * @var float
     */
    private $temperatureMorning;

    /**
     * @var float
     */
    private $temperatureEvening;

    /**
     * @var boolean
     */
    private $isBath;

    /**
     * @var boolean
     */
    private $isStroke;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var string
     */
    private $remark;


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
     * Set nowdate
     *
     * @param \DateTime $nowdate
     * @return History
     */
    public function setNowdate($nowdate)
    {
        $this->nowdate = $nowdate;

        return $this;
    }

    /**
     * Get nowdate
     *
     * @return \DateTime 
     */
    public function getNowdate()
    {
        return $this->nowdate;
    }

    /**
     * Set weight
     *
     * @param float $weight
     * @return History
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
     * Set height
     *
     * @param float $height
     * @return History
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return float 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set temperatureMorning
     *
     * @param float $temperatureMorning
     * @return History
     */
    public function setTemperatureMorning($temperatureMorning)
    {
        $this->temperatureMorning = $temperatureMorning;

        return $this;
    }

    /**
     * Get temperatureMorning
     *
     * @return float 
     */
    public function getTemperatureMorning()
    {
        return $this->temperatureMorning;
    }

    /**
     * Set temperatureEvening
     *
     * @param float $temperatureEvening
     * @return History
     */
    public function setTemperatureEvening($temperatureEvening)
    {
        $this->temperatureEvening = $temperatureEvening;

        return $this;
    }

    /**
     * Get temperatureEvening
     *
     * @return float 
     */
    public function getTemperatureEvening()
    {
        return $this->temperatureEvening;
    }

    /**
     * Set isBath
     *
     * @param boolean $isBath
     * @return History
     */
    public function setIsBath($isBath)
    {
        $this->isBath = $isBath;

        return $this;
    }

    /**
     * Get isBath
     *
     * @return boolean 
     */
    public function getIsBath()
    {
        return $this->isBath;
    }

    /**
     * Set isStroke
     *
     * @param boolean $isStroke
     * @return History
     */
    public function setIsStroke($isStroke)
    {
        $this->isStroke = $isStroke;

        return $this;
    }

    /**
     * Get isStroke
     *
     * @return boolean 
     */
    public function getIsStroke()
    {
        return $this->isStroke;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return History
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

    /**
     * Set remark
     *
     * @param string $remark
     * @return History
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string 
     */
    public function getRemark()
    {
        return $this->remark;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $nurses;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nurses = new ArrayCollection();
        $this->stools = new ArrayCollection();
    }

    /**
     * Add nurses
     *
     * @param \Rick\BabyBundle\Entity\HistoryNurse $nurses
     * @return History
     */
    public function addNurse(HistoryNurse $nurses)
    {
        $this->nurses[] = $nurses;

        return $this;
    }

    /**
     * Remove nurses
     *
     * @param \Rick\BabyBundle\Entity\HistoryNurse $nurses
     */
    public function removeNurse(HistoryNurse $nurses)
    {
        $this->nurses->removeElement($nurses);
    }

    /**
     * Get nurses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNurses()
    {
        return $this->nurses;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $stools;


    /**
     * Add stools
     *
     * @param \Rick\BabyBundle\Entity\HistoryStool $stools
     * @return History
     */
    public function addStool(HistoryStool $stools)
    {
        $this->stools[] = $stools;

        return $this;
    }

    /**
     * Remove stools
     *
     * @param \Rick\BabyBundle\Entity\HistoryStool $stools
     */
    public function removeStool(HistoryStool $stools)
    {
        $this->stools->removeElement($stools);
    }

    /**
     * Get stools
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStools()
    {
        return $this->stools;
    }
}
