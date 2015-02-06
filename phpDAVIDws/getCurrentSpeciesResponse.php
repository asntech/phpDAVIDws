<?php

class getCurrentSpeciesResponse
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
     * @return getCurrentSpeciesResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
