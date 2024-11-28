# # SearchResult
contains the search results, aggregations and paging information

## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index**| **string** | index where the data were extrapolated  |
**params**| [**\GeminiCommerce\Search\Model\SearchParams**](SearchParams.md) |   | [optional]
**page**| **int** | page number of the results you are processing  | [optional]
**total_pages**| **int** | number of pages of results  | [optional]
**total_hits**| **int** | number of total search results  | [optional]
**hits**| **string[]** | search result records contained in the specified page  | [optional]
**aggregations**| [**array<string,\GeminiCommerce\Search\Model\SearchAggrMap>**](SearchAggrMap.md) | array of aggregation obtained by search result  | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

