<?php
/**
 * This class stands for PhpDAVIDWSServiceAuthenticate originally named Authenticate
 * @package phpDAVIDws
 * @subpackage Services
 * @date 2015-02-01
 * @author Aziz Khan
 * @version 1.0
 */
/*
  authenticate(authenticate user by email address; return true if user has registered email with DAVID knowledge base)
  addList(add a gene list or background list to current session; arguments include inputIds, idType, listName, listType)
  getAllAnnotationCategoryNames (return all available annotation category names; no argument needed)
  getAllListNames (return all list names; no argument needed)
  getAllPopulationNames (return background names; no argument needed)
  getChartReport (generate chart report; arguments include threshold, count)
  getConversionTypes (return all acceptable idTypes; no argument needed)
  getCurrentList (return the position of current list; no argument needed)
  getCurrentSpecies (return current species of the current list; no argument needed)
  getCurrentPopulation (return the position of current background list; no argument needed)
  getDefaultCategoryNames (return all default category names; no argument needed)
  getGeneClusterReport (generate gene cluster report; arguments include overlap, initialSeed, finalSeed, linkage, kappa)
  getGeneReportCategories(return gene report categories; no argument needed)
  getListName (get the name of a list; argument is the position of the list)
  getListReport (generate list report; no argument needed)
  getSpecies (return species of the current list; no argument needed)
  getSummaryReport (return a summary report; no argument needed)
  getTableReport (generate table report; no argument needed)
  getTermClusterReport (generate term cluster report; arguments include overlap, initialSeed, finalSeed, linkage, kappa)
  setCurrentList (switch between gene lists; argument is the position of the list)
  setCurrentPopulation (switch between background lists; argument is the position of the list)
  setCurrentSpecies (select specie(s) to use; argument is a string of integers delimited by commas)
  setCategories (let user select categories; argument is a string with category names delimited by commas; return a list of validated category names)
  loadTesting (used by DAVID team; arguments include userName, reportTypes, listName, listType, idType, inputIds)
 */

class DAVIDWebService extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'setCurrentSpecies' => '\\setCurrentSpecies',
      'setCurrentSpeciesResponse' => '\\setCurrentSpeciesResponse',
      'setCurrentPopulation' => '\\setCurrentPopulation',
      'setCurrentPopulationResponse' => '\\setCurrentPopulationResponse',
      'Exception' => '\\ExceptionCustom',
      'setCurrentList' => '\\setCurrentList',
      'setCurrentListResponse' => '\\setCurrentListResponse',
      'setCategories' => '\\setCategories',
      'setCategoriesResponse' => '\\setCategoriesResponse',
      //'loadTesting' => '\\loadTesting',
      //'loadTestingResponse' => '\\loadTestingResponse',
      'getTermClusterReport' => '\\getTermClusterReport',
      'getTermClusterReportResponse' => '\\getTermClusterReportResponse',
      'getTableReportResponse' => '\\getTableReportResponse',
      'getSummaryReportResponse' => '\\getSummaryReportResponse',
      'getSpeciesResponse' => '\\getSpeciesResponse',
      'getListReportResponse' => '\\getListReportResponse',
      'getListName' => '\\getListName',
      'getListNameResponse' => '\\getListNameResponse',
      'getGeneReportCategoriesResponse' => '\\getGeneReportCategoriesResponse',
      'getGeneClusterReport' => '\\getGeneClusterReport',
      'getGeneClusterReportResponse' => '\\getGeneClusterReportResponse',
      'getDefaultCategoryNamesResponse' => '\\getDefaultCategoryNamesResponse',
      'getCurrentSpeciesResponse' => '\\getCurrentSpeciesResponse',
      'getCurrentPopulationResponse' => '\\getCurrentPopulationResponse',
      'getCurrentListResponse' => '\\getCurrentListResponse',
      'getConversionTypesResponse' => '\\getConversionTypesResponse',
      'getChartReport' => '\\getChartReport',
      'getChartReportResponse' => '\\getChartReportResponse',
      'getAllPopulationNamesResponse' => '\\getAllPopulationNamesResponse',
      'getAllListNamesResponse' => '\\getAllListNamesResponse',
      'getAllAnnotationCategoryNamesResponse' => '\\getAllAnnotationCategoryNamesResponse',
      'authenticate' => '\\authenticate',
      'authenticateResponse' => '\\authenticateResponse',
      'addList' => '\\addList',
      'addListResponse' => '\\addListResponse',
      'tableRecord' => '\\tableRecord',
      'annotationRecord' => '\\annotationRecord',
      'geneObject' => '\\geneObject',
      'ArrayOfString' => '\\ArrayOfString',
      'mainSummaryRecord' => '\\mainSummaryRecord',
      'summaryRecord' => '\\summaryRecord',
      'listRecord' => '\\listRecord',
      'simpleTermClusterRecord' => '\\simpleTermClusterRecord',
      'simpleChartRecord' => '\\simpleChartRecord',
      'simpleGeneClusterRecord' => '\\simpleGeneClusterRecord',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://david.abcc.ncifcrf.gov/webservice/services/DAVIDWebService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * It authenticates the use by email address
     * If you are a new user, for registration go to http://david.abcc.ncifcrf.gov/webservice/register.htm
     * @param authenticate $parameters
     * @return authenticateResponse
     */
    public function authenticate(authenticate $parameters)
    {
      return $this->__soapCall('authenticate', array($parameters));
    }

    /**
     * @return getGeneReportCategoriesResponse
     */
    public function getGeneReportCategories()
    {
      return $this->__soapCall('getGeneReportCategories', array());
    }

    /**
     * @return getAllPopulationNamesResponse
     */
    public function getAllPopulationNames()
    {
      return $this->__soapCall('getAllPopulationNames', array());
    }

    /**
     * @return getCurrentListResponse
     */
    public function getCurrentList()
    {
      return $this->__soapCall('getCurrentList', array());
    }

    /**
     * @param setCurrentPopulation $parameters
     * @return setCurrentPopulationResponse
     */
    public function setCurrentPopulation(setCurrentPopulation $parameters)
    {
      return $this->__soapCall('setCurrentPopulation', array($parameters));
    }

    /**
     * @return getDefaultCategoryNamesResponse
     */
    public function getDefaultCategoryNames()
    {
      return $this->__soapCall('getDefaultCategoryNames', array());
    }

    /**
     * @return getAllListNamesResponse
     */
    public function getAllListNames()
    {
      return $this->__soapCall('getAllListNames', array());
    }

    /**
     * @param getGeneClusterReport $parameters
     * @return getGeneClusterReportResponse
     */
    public function getGeneClusterReport(getGeneClusterReport $parameters)
    {
      return $this->__soapCall('getGeneClusterReport', array($parameters));
    }

    /**
     * @return getAllAnnotationCategoryNamesResponse
     */
    public function getAllAnnotationCategoryNames()
    {
      return $this->__soapCall('getAllAnnotationCategoryNames', array());
    }

    /**
     * @return getTableReportResponse
     */
    public function getTableReport()
    {
      return $this->__soapCall('getTableReport', array());
    }

    /**
     * @return getCurrentSpeciesResponse
     */
    public function getCurrentSpecies()
    {
      return $this->__soapCall('getCurrentSpecies', array());
    }

    /**
     * @param getTermClusterReport $parameters
     * @return getTermClusterReportResponse
     */
    public function getTermClusterReport(getTermClusterReport $parameters)
    {
      return $this->__soapCall('getTermClusterReport', array($parameters));
    }

    /**
     * @return getCurrentPopulationResponse
     */
    public function getCurrentPopulation()
    {
      return $this->__soapCall('getCurrentPopulation', array());
    }

    /**
     * @return getConversionTypesResponse
     */
    public function getConversionTypes()
    {
      return $this->__soapCall('getConversionTypes', array());
    }

    /**
     * @param getListName $parameters
     * @return getListNameResponse
     */
    public function getListName(getListName $parameters)
    {
      return $this->__soapCall('getListName', array($parameters));
    }

    /**
     * @param setCurrentSpecies $parameters
     * @return setCurrentSpeciesResponse
     */
    public function setCurrentSpecies(setCurrentSpecies $parameters)
    {
      return $this->__soapCall('setCurrentSpecies', array($parameters));
    }

    /**
     * @param getChartReport $parameters
     * @return getChartReportResponse
     */
    public function getChartReport(getChartReport $parameters)
    {
      return $this->__soapCall('getChartReport', array($parameters));
    }

    /**
     * @param setCategories $parameters
     * @return setCategoriesResponse
     */
    public function setCategories(setCategories $parameters)
    {
      return $this->__soapCall('setCategories', array($parameters));
    }

    /**
     * @return getListReportResponse
     */
    public function getListReport()
    {
      return $this->__soapCall('getListReport', array());
    }

    /**
     * @param setCurrentList $parameters
     * @return setCurrentListResponse
     */
    public function setCurrentList(setCurrentList $parameters)
    {
      return $this->__soapCall('setCurrentList', array($parameters));
    }

    /**
     * @return getSummaryReportResponse
     */
    public function getSummaryReport()
    {
      return $this->__soapCall('getSummaryReport', array());
    }

    /**
     * @return getSpeciesResponse
     */
    public function getSpecies()
    {
      return $this->__soapCall('getSpecies', array());
    }

      /**
     * @param addList $parameters
     * @return addListResponse
     */
    public function addList(addList $parameters)
    {
      return $this->__soapCall('addList', array($parameters));
    }

    /**
     * @param loadTesting $parameters
     * @return loadTestingResponse
     */
    public function loadTesting(loadTesting $parameters)
    {
      return $this->__soapCall('loadTesting', array($parameters));
    }

  

}
