<?php

class listRecord
{

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
     * @var string[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
    
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
     * @return listRecord
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
     * @return listRecord
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
     * @return listRecord
     */
    public function setSpecies($species)
    {
      $this->species = $species;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param string[] $values
     * @return listRecord
     */
    public function setValues(array $values)
    {
      $this->values = $values;
      return $this;
    }

}
