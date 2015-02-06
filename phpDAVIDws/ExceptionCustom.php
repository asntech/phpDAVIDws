<?php

class ExceptionCustom
{

    /**
     * @var Exception $Exception
     */
    protected $Exception = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Exception
     */
    public function getException()
    {
      return $this->Exception;
    }

    /**
     * @param Exception $Exception
     * @return Exception
     */
    public function setException($Exception)
    {
      $this->Exception = $Exception;
      return $this;
    }

}
