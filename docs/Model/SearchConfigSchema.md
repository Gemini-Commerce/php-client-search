# # SearchConfigSchema
contains index configurations fields

## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index**| **string** | index name, to create or where update configuration  |
**document_key_name**| **string** | field which value will be used as document id [#DOCGENBUG REQUIRED FIELD]  | [optional]
**attributes**| [**\GeminiCommerce\Search\Model\SearchConfigSchemaAttribute[]**](SearchConfigSchemaAttribute.md) | fields that can be stored into index and later retrieved  |
**searchables**| [**\GeminiCommerce\Search\Model\SearchConfigSchemaSearchable[]**](SearchConfigSchemaSearchable.md) | fields that can be used for fulltext searches  | [optional]
**facets**| [**\GeminiCommerce\Search\Model\SearchConfigSchemaFacet[]**](SearchConfigSchemaFacet.md) | fields that can be used for aggregations  | [optional]
**filters**| [**\GeminiCommerce\Search\Model\SearchConfigSchemaFilter[]**](SearchConfigSchemaFilter.md) | fields that can be used for filtering  | [optional]
**sortables**| [**\GeminiCommerce\Search\Model\SearchConfigSchemaSortable[]**](SearchConfigSchemaSortable.md) | fields that can be used for sorting  | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

