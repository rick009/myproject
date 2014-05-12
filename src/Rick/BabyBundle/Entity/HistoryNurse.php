<?php

namespace Rick\BabyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoryNurse
 */
class HistoryNurse
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $nurseTime;

    /**
     * @var integer
     */
    private $milliliter;

    /**
     * @var integer
     */
    private $historyId;


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
     * Set nurseTime
     *
     * @param \DateTime $nurseTime
     * @return HistoryNurse
     */
    public function setNurseTime($nurseTime)
    {
        $this->nurseTime = $nurseTime;

        return $this;
    }

    /**
     * Get nurseTime
     *
     * @return \DateTime 
     */
    public function getNurseTime()
    {
        return $this->nurseTime;
    }

    /**
     * Set milliliter
     *
     * @param integer $milliliter
     * @return HistoryNurse
     */
    public function setMilliliter($milliliter)
    {
        $this->milliliter = $milliliter;

        return $this;
    }

    /**
     * Get milliliter
     *
     * @return integer 
     */
    public function getMilliliter()
    {
        return $this->milliliter;
    }

    /**
     * Set historyId
     *
     * @param integer $historyId
     * @return HistoryNurse
     */
    public function setHistoryId($historyId)
    {
        $this->historyId = $historyId;

        return $this;
    }

    /**
     * Get historyId
     *
     * @return integer 
     */
    public function getHistoryId()
    {
        return $this->historyId;
    }
}
