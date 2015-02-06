<?php

class getTermClusterReport
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
     * @var int $args2
     */
    protected $args2 = null;

    /**
     * @var float $args3
     */
    protected $args3 = null;

    /**
     * @var int $args4
     */
    protected $args4 = null;

    /**
     * @param int $args0
     * @param int $args1
     * @param int $args2
     * @param float $args3
     * @param int $args4
     */
    public function __construct($args0, $args1, $args2, $args3, $args4)
    {
      $this->args0 = $args0;
      $this->args1 = $args1;
      $this->args2 = $args2;
      $this->args3 = $args3;
      $this->args4 = $args4;
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
     * @return getTermClusterReport
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
     * @return getTermClusterReport
     */
    public function setArgs1($args1)
    {
      $this->args1 = $args1;
      return $this;
    }

    /**
     * @return int
     */
    public function getArgs2()
    {
      return $this->args2;
    }

    /**
     * @param int $args2
     * @return getTermClusterReport
     */
    public function setArgs2($args2)
    {
      $this->args2 = $args2;
      return $this;
    }

    /**
     * @return float
     */
    public function getArgs3()
    {
      return $this->args3;
    }

    /**
     * @param float $args3
     * @return getTermClusterReport
     */
    public function setArgs3($args3)
    {
      $this->args3 = $args3;
      return $this;
    }

    /**
     * @return int
     */
    public function getArgs4()
    {
      return $this->args4;
    }

    /**
     * @param int $args4
     * @return getTermClusterReport
     */
    public function setArgs4($args4)
    {
      $this->args4 = $args4;
      return $this;
    }

}
