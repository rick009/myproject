<?php

namespace Rick\BabyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoryStool
 */
class HistoryStool
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $historyId;

    /**
     * @var \DateTime
     */
    private $stoolTime;

    /**
     * @var string
     */
    private $color;


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
     * Set historyId
     *
     * @param integer $historyId
     * @return HistoryStool
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

    /**
     * Set stoolTime
     *
     * @param \DateTime $stoolTime
     * @return HistoryStool
     */
    public function setStoolTime($stoolTime)
    {
        $this->stoolTime = $stoolTime;

        return $this;
    }

    /**
     * Get stoolTime
     *
     * @return \DateTime 
     */
    public function getStoolTime()
    {
        return $this->stoolTime;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return HistoryStool
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
     * @var \Rick\BabyBundle\Entity\History
     */
    private $history;


    /**
     * Set history
     *
     * @param \Rick\BabyBundle\Entity\History $history
     * @return HistoryStool
     */
    public function setHistory(\Rick\BabyBundle\Entity\History $history = null)
    {
        $this->history = $history;

        return $this;
    }

    /**
     * Get history
     *
     * @return \Rick\BabyBundle\Entity\History 
     */
    public function getHistory()
    {
        return $this->history;
    }
}
