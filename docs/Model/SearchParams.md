# # SearchParams
contains params needed to perform search

## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offset**| **int** | number of the record where to start to take result for pagination  | [optional]
**limit**| **int** | number of search result for page  | [optional]
**term**| **string** | term to search  | [optional]
**searchables**| [**\GeminiCommerce\Search\Model\SearchParamSearchable[]**](SearchParamSearchable.md) | list of attributes where to search the indicated term, if not indicated it uses all in those present in index configuration  | [optional]
**filters**| [**\GeminiCommerce\Search\Model\SearchParamFilter[]**](SearchParamFilter.md) | list of attribute and relative value which you want to filter search results  | [optional]
**attributes**| [**\GeminiCommerce\Search\Model\SearchParamAttribute[]**](SearchParamAttribute.md) | attributes that you want to be present in search results  | [optional]
**facets**| [**\GeminiCommerce\Search\Model\SearchParamFacet[]**](SearchParamFacet.md) | list of attributes you want to create aggregation to make filter suggestion  | [optional]
**sorts**| [**\GeminiCommerce\Search\Model\SearchParamSort[]**](SearchParamSort.md) | params to sort search results  | [optional]
**min_score**| **float** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

