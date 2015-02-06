<?php

class getGeneClusterReportResponse
{

    /**
     * @var simpleGeneClusterRecord $return
     */
    protected $return = null;

    /**
     * @param simpleGeneClusterRecord $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return simpleGeneClusterRecord
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param simpleGeneClusterRecord $return
     * @return getGeneClusterReportResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
