<?php

class getTermClusterReportResponse
{

    /**
     * @var simpleTermClusterRecord $return
     */
    protected $return = null;

    /**
     * @param simpleTermClusterRecord $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return simpleTermClusterRecord
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param simpleTermClusterRecord $return
     * @return getTermClusterReportResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
