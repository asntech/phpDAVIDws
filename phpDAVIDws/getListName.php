<?php

class getListName
{

    /**
     * @var int $args0
     */
    protected $args0 = null;

    /**
     * @var int $args1
     */
    protected $args1 = null;

    /**
     * @param int $args0
     * @param int $args1
     */
    public function __construct($args0, $args1)
    {
      $this->args0 = $args0;
      $this->args1 = $args1;
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
     * @return getListName
     */
    public function setArgs0($args0)
    {
      $this->args0 = $args0;
      return $this;
    }

    /**
     * @return int
     */
    public function getArgs1()
    {
      return $this->args1;
    }

    /**
     * @param int $args1
     * @return getListName
     */
    public function setArgs1($args1)
    {
      $this->args1 = $args1;
      return $this;
    }

}
