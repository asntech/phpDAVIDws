<?php

class tableRecord
{

    /**
     * @var annotationRecord[] $annotationRecords
     */
    protected $annotationRecords = null;

    /**
     * @var geneObject $geneObject
     */
    protected $geneObject = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $species
     */
    protected $species = null;

    /**
     * @var ArrayOfString[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return annotationRecord[]
     */
    public function getAnnotationRecords()
    {
      return $this->annotationRecords;
    }

    /**
     * @param annotationRecord[] $annotationRecords
     * @return tableRecord
     */
    public function setAnnotationRecords(array $annotationRecords)
    {
      $this->annotationRecords = $annotationRecords;
      return $this;
    }

    /**
     * @return geneObject
     */
    public function getGeneObject()
    {
      return $this->geneObject;
    }

    /**
     * @param geneObject $geneObject
     * @return tableRecord
     */
    public function setGeneObject($geneObject)
    {
      $this->geneObject = $geneObject;
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
     * @return tableRecord
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecies()
    {
      return $this->species;
    }

    /**
     * @param string $species
     * @return tableRecord
     */
    public function setSpecies($species)
    {
      $this->species = $species;
      return $this;
    }

    /**
     * @return ArrayOfString[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param ArrayOfString[] $values
     * @return tableRecord
     */
    public function setValues(array $values)
    {
      $this->values = $values;
      return $this;
    }

}
