<?php

class setCurrentPopulation
{

    /**
     * @var int $args0
     */
    protected $args0 = null;

    /**
     * @param int $args0
     */
    public function __construct($args0)
    {
      $this->args0 = $args0;
    }

    /**
     * @return int
     */
    public function getArgs0()
    {
      return $this->args0;
    }

    /**
     * @param int $args0
     * @return setCurrentPopulation
     */
    public function setArgs0($args0)
    {
      $this->args0 = $args0;
      return $this;
    }

}
