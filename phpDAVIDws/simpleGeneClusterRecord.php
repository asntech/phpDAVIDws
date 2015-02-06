<?php

class simpleGeneClusterRecord
{

    /**
     * @var listRecord[] $listRecords
     */
    protected $listRecords = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var float $score
     */
    protected $score = null;

    /**
     * @param float $score
     */
    public function __construct($score)
    {
      $this->score = $score;
    }

    /**
     * @return listRecord[]
     */
    public function getListRecords()
    {
      return $this->listRecords;
    }

    /**
     * @param listRecord[] $listRecords
     * @return simpleGeneClusterRecord
     */
    public function setListRecords(array $listRecords)
    {
      $this->listRecords = $listRecords;
      return $this;
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
     * @return simpleGeneClusterRecord
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
     * @return simpleGeneClusterRecord
     */
    public function setScore($score)
    {
      $this->score = $score;
      return $this;
    }

}
