<?php

class getCurrentPopulationResponse
{

    /**
     * @var int $return
     */
    protected $return = null;

    /**
     * @param int $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return int
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param int $return
     * @return getCurrentPopulationResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
