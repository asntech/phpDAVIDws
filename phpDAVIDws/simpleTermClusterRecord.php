<?php

class simpleTermClusterRecord
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var float $score
     */
    protected $score = null;

    /**
     * @var simpleChartRecord[] $simpleChartRecords
     */
    protected $simpleChartRecords = null;

    /**
     * @param float $score
     */
    public function __construct($score)
    {
      $this->score = $score;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return simpleTermClusterRecord
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return float
     */
    public function getScore()
    {
      return $this->score;
    }

    /**
     * @param float $score
     * @return simpleTermClusterRecord
     */
    public function setScore($score)
    {
      $this->score = $score;
      return $this;
    }

    /**
     * @return simpleChartRecord[]
     */
    public function getSimpleChartRecords()
    {
      return $this->simpleChartRecords;
    }

    /**
     * @param simpleChartRecord[] $simpleChartRecords
     * @return simpleTermClusterRecord
     */
    public function setSimpleChartRecords(array $simpleChartRecords)
    {
      $this->simpleChartRecords = $simpleChartRecords;
      return $this;
    }

}
