<?php
/*
* addList add a gene list or background list to current session. 
* It takes arguments include inputIds, idType, listName, listType
*/
class addList
{

    /**
     * @var string $inputIds
     */
    protected $args0 = null;

    /**
     * @var string $idType
     */
    protected $args1 = null;

    /**
     * @var string $listName
     */
    protected $args2 = null;

    /**
     * @var int $listType
     */
    protected $args3 = null;

    /**
     * @param string $args0
     * @param string $args1
     * @param string $args2
     * @param int $args3
     */
    public function __construct($args0, $args1, $args2, $args3)
    {
      $this->args0 = $args0;
      $this->args1 = $args1;
      $this->args2 = $args2;
      $this->args3 = $args3;
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
     * @return addList
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
     * @return addList
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
     * @return addList
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
     * @return addList
     */
    public function setArgs3($args3)
    {
      $this->args3 = $args3;
      return $this;
    }

}
