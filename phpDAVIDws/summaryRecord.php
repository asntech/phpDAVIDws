<?php

class summaryRecord
{

    /**
     * @var string $category
     */
    protected $category = null;

    /**
     * @var int $categoryId
     */
    protected $categoryId = null;

    /**
     * @var int $count
     */
    protected $count = null;

    /**
     * @var float $percent
     */
    protected $percent = null;

    /**
     * @param int $categoryId
     * @param int $count
     * @param float $percent
     */
    public function __construct($categoryId, $count, $percent)
    {
      $this->categoryId = $categoryId;
      $this->count = $count;
      $this->percent = $percent;
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
     * @return summaryRecord
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
      return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return summaryRecord
     */
    public function setCategoryId($categoryId)
    {
      $this->categoryId = $categoryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->count;
    }

    /**
     * @param int $count
     * @return summaryRecord
     */
    public function setCount($count)
    {
      $this->count = $count;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
      return $this->percent;
    }

    /**
     * @param float $percent
     * @return summaryRecord
     */
    public function setPercent($percent)
    {
      $this->percent = $percent;
      return $this;
    }

}
