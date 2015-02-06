<?php

class annotationRecord
{

    /**
     * @var string $category
     */
    protected $category = null;

    /**
     * @var string[] $terms
     */
    protected $terms = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param string $category
     * @return annotationRecord
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getTerms()
    {
      return $this->terms;
    }

    /**
     * @param string[] $terms
     * @return annotationRecord
     */
    public function setTerms(array $terms)
    {
      $this->terms = $terms;
      return $this;
    }

}
