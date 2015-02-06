<?php

class addListResponse
{

    /**
     * @var float $return
     */
    protected $return = null;

    /**
     * @param float $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return float
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param float $return
     * @return addListResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
