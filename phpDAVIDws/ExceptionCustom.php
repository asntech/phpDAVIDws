<?php
/**
 * @package Exception
 * @date 2015-02-01
 * @author Aziz Khan
 * @version 1.0
 */
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
