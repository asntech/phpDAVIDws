<?php

class getTableReportResponse
{

    /**
     * @var tableRecord $return
     */
    protected $return = null;

    /**
     * @param tableRecord $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return tableRecord
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param tableRecord $return
     * @return getTableReportResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
