<?php
/**
 * This is main service class of phpDAVIDws
 * @package phpDAVIDws
 * @date 2015-02-01
 * @author Aziz Khan
 * @version 1.0
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
      'loadTesting' => '\\loadTesting',
      'loadTestingResponse' => '\\loadTestingResponse',
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
