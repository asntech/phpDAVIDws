<?php

class getListReportResponse
{

    /**
     * @var listRecord $return
     */
    protected $return = null;

    /**
     * @param listRecord $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return listRecord
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param listRecord $return
     * @return getListReportResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
