<?php

class getChartReportResponse
{

    /**
     * @var simpleChartRecord $return
     */
    protected $return = null;

    /**
     * @param simpleChartRecord $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return simpleChartRecord
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param simpleChartRecord $return
     * @return getChartReportResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
