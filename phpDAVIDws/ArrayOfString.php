<?php

class ArrayOfString
{

    /**
     * @var string[] $array
     */
    protected $array = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getArray()
    {
      return $this->array;
    }

    /**
     * @param string[] $array
     * @return ArrayOfString
     */
    public function setArray(array $array)
    {
      $this->array = $array;
      return $this;
    }

}
