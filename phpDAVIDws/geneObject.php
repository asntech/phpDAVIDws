<?php

class geneObject
{

    /**
     * @var int[] $categories
     */
    protected $categories = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $taxId
     */
    protected $taxId = null;

    /**
     * @var int[] $terms
     */
    protected $terms = null;

    /**
     * @param int $id
     * @param int $taxId
     */
    public function __construct($id, $taxId)
    {
      $this->id = $id;
      $this->taxId = $taxId;
    }

    /**
     * @return int[]
     */
    public function getCategories()
    {
      return $this->categories;
    }

    /**
     * @param int[] $categories
     * @return geneObject
     */
    public function setCategories(array $categories)
    {
      $this->categories = $categories;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return geneObject
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return geneObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getTaxId()
    {
      return $this->taxId;
    }

    /**
     * @param int $taxId
     * @return geneObject
     */
    public function setTaxId($taxId)
    {
      $this->taxId = $taxId;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getTerms()
    {
      return $this->terms;
    }

    /**
     * @param int[] $terms
     * @return geneObject
     */
    public function setTerms(array $terms)
    {
      $this->terms = $terms;
      return $this;
    }

}
