<?php

class getSummaryReportResponse
{

    /**
     * @var mainSummaryRecord $return
     */
    protected $return = null;

    /**
     * @param mainSummaryRecord $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return mainSummaryRecord
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param mainSummaryRecord $return
     * @return getSummaryReportResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
