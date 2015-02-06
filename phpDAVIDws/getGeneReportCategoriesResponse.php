<?php

class getGeneReportCategoriesResponse
{

    /**
     * @var string $return
     */
    protected $return = null;

    /**
     * @param string $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return string
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param string $return
     * @return getGeneReportCategoriesResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
