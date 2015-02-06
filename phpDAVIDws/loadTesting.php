<?php

class loadTesting
{

    /**
     * @var string $args0
     */
    protected $args0 = null;

    /**
     * @var string $args1
     */
    protected $args1 = null;

    /**
     * @var string $args2
     */
    protected $args2 = null;

    /**
     * @var int $args3
     */
    protected $args3 = null;

    /**
     * @var string $args4
     */
    protected $args4 = null;

    /**
     * @var string $args5
     */
    protected $args5 = null;

    /**
     * @param string $args0
     * @param string $args1
     * @param string $args2
     * @param int $args3
     * @param string $args4
     * @param string $args5
     */
    public function __construct($args0, $args1, $args2, $args3, $args4, $args5)
    {
      $this->args0 = $args0;
      $this->args1 = $args1;
      $this->args2 = $args2;
      $this->args3 = $args3;
      $this->args4 = $args4;
      $this->args5 = $args5;
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
     * @return loadTesting
     */
    public function setArgs0($args0)
    {
      $this->args0 = $args0;
      return $this;
    }

    /**
     * @return string
     */
    public function getArgs1()
    {
      return $this->args1;
    }

    /**
     * @param string $args1
     * @return loadTesting
     */
    public function setArgs1($args1)
    {
      $this->args1 = $args1;
      return $this;
    }

    /**
     * @return string
     */
    public function getArgs2()
    {
      return $this->args2;
    }

    /**
     * @param string $args2
     * @return loadTesting
     */
    public function setArgs2($args2)
    {
      $this->args2 = $args2;
      return $this;
    }

    /**
     * @return int
     */
    public function getArgs3()
    {
      return $this->args3;
    }

    /**
     * @param int $args3
     * @return loadTesting
     */
    public function setArgs3($args3)
    {
      $this->args3 = $args3;
      return $this;
    }

    /**
     * @return string
     */
    public function getArgs4()
    {
      return $this->args4;
    }

    /**
     * @param string $args4
     * @return loadTesting
     */
    public function setArgs4($args4)
    {
      $this->args4 = $args4;
      return $this;
    }

    /**
     * @return string
     */
    public function getArgs5()
    {
      return $this->args5;
    }

    /**
     * @param string $args5
     * @return loadTesting
     */
    public function setArgs5($args5)
    {
      $this->args5 = $args5;
      return $this;
    }

}
