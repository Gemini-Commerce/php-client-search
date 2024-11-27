# # SearchParams
contains params needed to perform search

## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offset**| **int** | number of the record where to start to take result for pagination  | [optional]
**limit**| **int** | number of search result for page  | [optional]
**term**| **string** | term to search  | [optional]
**searchables**| [**\OpenAPI\Client\Model\SearchParamSearchable[]**](SearchParamSearchable.md) | list of attributes where to search the indicated term, if not indicated it uses all in those present in index configuration  | [optional]
**filters**| [**\OpenAPI\Client\Model\SearchParamFilter[]**](SearchParamFilter.md) | list of attribute and relative value which you want to filter search results  | [optional]
**attributes**| [**\OpenAPI\Client\Model\SearchParamAttribute[]**](SearchParamAttribute.md) | attributes that you want to be present in search results  | [optional]
**facets**| [**\OpenAPI\Client\Model\SearchParamFacet[]**](SearchParamFacet.md) | list of attributes you want to create aggregation to make filter suggestion  | [optional]
**sorts**| [**\OpenAPI\Client\Model\SearchParamSort[]**](SearchParamSort.md) | params to sort search results  | [optional]
**min_score**| **float** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

