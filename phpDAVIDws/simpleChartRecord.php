<?php

class simpleChartRecord
{

    /**
     * @var float $EASEBonferroni
     */
    protected $EASEBonferroni = null;

    /**
     * @var float $afdr
     */
    protected $afdr = null;

    /**
     * @var float $benjamini
     */
    protected $benjamini = null;

    /**
     * @var float $bonferroni
     */
    protected $bonferroni = null;

    /**
     * @var string $categoryName
     */
    protected $categoryName = null;

    /**
     * @var float $ease
     */
    protected $ease = null;

    /**
     * @var float $fisher
     */
    protected $fisher = null;

    /**
     * @var float $foldEnrichment
     */
    protected $foldEnrichment = null;

    /**
     * @var string $geneIds
     */
    protected $geneIds = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $listHits
     */
    protected $listHits = null;

    /**
     * @var string $listName
     */
    protected $listName = null;

    /**
     * @var int $listTotals
     */
    protected $listTotals = null;

    /**
     * @var float $percent
     */
    protected $percent = null;

    /**
     * @var int $popHits
     */
    protected $popHits = null;

    /**
     * @var int $popTotals
     */
    protected $popTotals = null;

    /**
     * @var float $rfdr
     */
    protected $rfdr = null;

    /**
     * @var double[] $scores
     */
    protected $scores = null;

    /**
     * @var string $termName
     */
    protected $termName = null;

    /**
     * @param float $EASEBonferroni
     * @param float $afdr
     * @param float $benjamini
     * @param float $bonferroni
     * @param float $ease
     * @param float $fisher
     * @param float $foldEnrichment
     * @param int $id
     * @param int $listHits
     * @param int $listTotals
     * @param float $percent
     * @param int $popHits
     * @param int $popTotals
     * @param float $rfdr
     */
    public function __construct($EASEBonferroni, $afdr, $benjamini, $bonferroni, $ease, $fisher, $foldEnrichment, $id, $listHits, $listTotals, $percent, $popHits, $popTotals, $rfdr)
    {
      $this->EASEBonferroni = $EASEBonferroni;
      $this->afdr = $afdr;
      $this->benjamini = $benjamini;
      $this->bonferroni = $bonferroni;
      $this->ease = $ease;
      $this->fisher = $fisher;
      $this->foldEnrichment = $foldEnrichment;
      $this->id = $id;
      $this->listHits = $listHits;
      $this->listTotals = $listTotals;
      $this->percent = $percent;
      $this->popHits = $popHits;
      $this->popTotals = $popTotals;
      $this->rfdr = $rfdr;
    }

    /**
     * @return float
     */
    public function getEASEBonferroni()
    {
      return $this->EASEBonferroni;
    }

    /**
     * @param float $EASEBonferroni
     * @return simpleChartRecord
     */
    public function setEASEBonferroni($EASEBonferroni)
    {
      $this->EASEBonferroni = $EASEBonferroni;
      return $this;
    }

    /**
     * @return float
     */
    public function getAfdr()
    {
      return $this->afdr;
    }

    /**
     * @param float $afdr
     * @return simpleChartRecord
     */
    public function setAfdr($afdr)
    {
      $this->afdr = $afdr;
      return $this;
    }

    /**
     * @return float
     */
    public function getBenjamini()
    {
      return $this->benjamini;
    }

    /**
     * @param float $benjamini
     * @return simpleChartRecord
     */
    public function setBenjamini($benjamini)
    {
      $this->benjamini = $benjamini;
      return $this;
    }

    /**
     * @return float
     */
    public function getBonferroni()
    {
      return $this->bonferroni;
    }

    /**
     * @param float $bonferroni
     * @return simpleChartRecord
     */
    public function setBonferroni($bonferroni)
    {
      $this->bonferroni = $bonferroni;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
      return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return simpleChartRecord
     */
    public function setCategoryName($categoryName)
    {
      $this->categoryName = $categoryName;
      return $this;
    }

    /**
     * @return float
     */
    public function getEase()
    {
      return $this->ease;
    }

    /**
     * @param float $ease
     * @return simpleChartRecord
     */
    public function setEase($ease)
    {
      $this->ease = $ease;
      return $this;
    }

    /**
     * @return float
     */
    public function getFisher()
    {
      return $this->fisher;
    }

    /**
     * @param float $fisher
     * @return simpleChartRecord
     */
    public function setFisher($fisher)
    {
      $this->fisher = $fisher;
      return $this;
    }

    /**
     * @return float
     */
    public function getFoldEnrichment()
    {
      return $this->foldEnrichment;
    }

    /**
     * @param float $foldEnrichment
     * @return simpleChartRecord
     */
    public function setFoldEnrichment($foldEnrichment)
    {
      $this->foldEnrichment = $foldEnrichment;
      return $this;
    }

    /**
     * @return string
     */
    public function getGeneIds()
    {
      return $this->geneIds;
    }

    /**
     * @param string $geneIds
     * @return simpleChartRecord
     */
    public function setGeneIds($geneIds)
    {
      $this->geneIds = $geneIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return simpleChartRecord
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getListHits()
    {
      return $this->listHits;
    }

    /**
     * @param int $listHits
     * @return simpleChartRecord
     */
    public function setListHits($listHits)
    {
      $this->listHits = $listHits;
      return $this;
    }

    /**
     * @return string
     */
    public function getListName()
    {
      return $this->listName;
    }

    /**
     * @param string $listName
     * @return simpleChartRecord
     */
    public function setListName($listName)
    {
      $this->listName = $listName;
      return $this;
    }

    /**
     * @return int
     */
    public function getListTotals()
    {
      return $this->listTotals;
    }

    /**
     * @param int $listTotals
     * @return simpleChartRecord
     */
    public function setListTotals($listTotals)
    {
      $this->listTotals = $listTotals;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
      return $this->percent;
    }

    /**
     * @param float $percent
     * @return simpleChartRecord
     */
    public function setPercent($percent)
    {
      $this->percent = $percent;
      return $this;
    }

    /**
     * @return int
     */
    public function getPopHits()
    {
      return $this->popHits;
    }

    /**
     * @param int $popHits
     * @return simpleChartRecord
     */
    public function setPopHits($popHits)
    {
      $this->popHits = $popHits;
      return $this;
    }

    /**
     * @return int
     */
    public function getPopTotals()
    {
      return $this->popTotals;
    }

    /**
     * @param int $popTotals
     * @return simpleChartRecord
     */
    public function setPopTotals($popTotals)
    {
      $this->popTotals = $popTotals;
      return $this;
    }

    /**
     * @return float
     */
    public function getRfdr()
    {
      return $this->rfdr;
    }

    /**
     * @param float $rfdr
     * @return simpleChartRecord
     */
    public function setRfdr($rfdr)
    {
      $this->rfdr = $rfdr;
      return $this;
    }

    /**
     * @return double[]
     */
    public function getScores()
    {
      return $this->scores;
    }

    /**
     * @param double[] $scores
     * @return simpleChartRecord
     */
    public function setScores(array $scores)
    {
      $this->scores = $scores;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermName()
    {
      return $this->termName;
    }

    /**
     * @param string $termName
     * @return simpleChartRecord
     */
    public function setTermName($termName)
    {
      $this->termName = $termName;
      return $this;
    }

}
