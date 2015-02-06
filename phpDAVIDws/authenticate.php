<?php

class authenticate
{

    /**
     * @var string $args0
     */
    protected $args0 = null;

    /**
     * @param string $args0
     */
    public function __construct($args0)
    {
      $this->args0 = $args0;
    }

    /**
     * @return string
     */
    public function getArgs0()
    {
      return $this->args0;
    }

    /**
     * @param string $args0
     * @return authenticate
     */
    public function setArgs0($args0)
    {
      $this->args0 = $args0;
      return $this;
    }

}
