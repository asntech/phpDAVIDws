<?php


 function david_autoloader($class)
{
    $classes = array(
        'DAVIDWebService' => __DIR__ .'/DAVIDWebService.php',
        'setCurrentSpecies' => __DIR__ .'/setCurrentSpecies.php',
        'setCurrentSpeciesResponse' => __DIR__ .'/setCurrentSpeciesResponse.php',
        'setCurrentPopulation' => __DIR__ .'/setCurrentPopulation.php',
        'setCurrentPopulationResponse' => __DIR__ .'/setCurrentPopulationResponse.php',
        'ExceptionCustom' => __DIR__ .'/ExceptionCustom.php',
        'setCurrentList' => __DIR__ .'/setCurrentList.php',
        'setCurrentListResponse' => __DIR__ .'/setCurrentListResponse.php',
        'setCategories' => __DIR__ .'/setCategories.php',
        'setCategoriesResponse' => __DIR__ .'/setCategoriesResponse.php',
        //'loadTesting' => __DIR__ .'/loadTesting.php',
        //'loadTestingResponse' => __DIR__ .'/loadTestingResponse.php',
        'getTermClusterReport' => __DIR__ .'/getTermClusterReport.php',
        'getTermClusterReportResponse' => __DIR__ .'/getTermClusterReportResponse.php',
        'getTableReportResponse' => __DIR__ .'/getTableReportResponse.php',
        'getSummaryReportResponse' => __DIR__ .'/getSummaryReportResponse.php',
        'getSpeciesResponse' => __DIR__ .'/getSpeciesResponse.php',
        'getListReportResponse' => __DIR__ .'/getListReportResponse.php',
        'getListName' => __DIR__ .'/getListName.php',
        'getListNameResponse' => __DIR__ .'/getListNameResponse.php',
        'getGeneReportCategoriesResponse' => __DIR__ .'/getGeneReportCategoriesResponse.php',
        'getGeneClusterReport' => __DIR__ .'/getGeneClusterReport.php',
        'getGeneClusterReportResponse' => __DIR__ .'/getGeneClusterReportResponse.php',
        'getDefaultCategoryNamesResponse' => __DIR__ .'/getDefaultCategoryNamesResponse.php',
        'getCurrentSpeciesResponse' => __DIR__ .'/getCurrentSpeciesResponse.php',
        'getCurrentPopulationResponse' => __DIR__ .'/getCurrentPopulationResponse.php',
        'getCurrentListResponse' => __DIR__ .'/getCurrentListResponse.php',
        'getConversionTypesResponse' => __DIR__ .'/getConversionTypesResponse.php',
        'getChartReport' => __DIR__ .'/getChartReport.php',
        'getChartReportResponse' => __DIR__ .'/getChartReportResponse.php',
        'getAllPopulationNamesResponse' => __DIR__ .'/getAllPopulationNamesResponse.php',
        'getAllListNamesResponse' => __DIR__ .'/getAllListNamesResponse.php',
        'getAllAnnotationCategoryNamesResponse' => __DIR__ .'/getAllAnnotationCategoryNamesResponse.php',
        'authenticate' => __DIR__ .'/authenticate.php',
        'authenticateResponse' => __DIR__ .'/authenticateResponse.php',
        'addList' => __DIR__ .'/addList.php',
        'addListResponse' => __DIR__ .'/addListResponse.php',
        'tableRecord' => __DIR__ .'/tableRecord.php',
        'annotationRecord' => __DIR__ .'/annotationRecord.php',
        'geneObject' => __DIR__ .'/geneObject.php',
        'ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'mainSummaryRecord' => __DIR__ .'/mainSummaryRecord.php',
        'summaryRecord' => __DIR__ .'/summaryRecord.php',
        'listRecord' => __DIR__ .'/listRecord.php',
        'simpleTermClusterRecord' => __DIR__ .'/simpleTermClusterRecord.php',
        'simpleChartRecord' => __DIR__ .'/simpleChartRecord.php',
        'simpleGeneClusterRecord' => __DIR__ .'/simpleGeneClusterRecord.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('david_autoloader');

// Do nothing. The rest is just leftovers from the code generation.
{
}
