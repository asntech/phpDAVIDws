<?php

class mainSummaryRecord
{

    /**
     * @var string $mainCategory
     */
    protected $mainCategory = null;

    /**
     * @var summaryRecord[] $summaryRecords
     */
    protected $summaryRecords = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMainCategory()
    {
      return $this->mainCategory;
    }

    /**
     * @param string $mainCategory
     * @return mainSummaryRecord
     */
    public function setMainCategory($mainCategory)
    {
      $this->mainCategory = $mainCategory;
      return $this;
    }

    /**
     * @return summaryRecord[]
     */
    public function getSummaryRecords()
    {
      return $this->summaryRecords;
    }

    /**
     * @param summaryRecord[] $summaryRecords
     * @return mainSummaryRecord
     */
    public function setSummaryRecords(array $summaryRecords)
    {
      $this->summaryRecords = $summaryRecords;
      return $this;
    }

}
