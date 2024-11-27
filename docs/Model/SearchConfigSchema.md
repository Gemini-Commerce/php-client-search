# # SearchConfigSchema
contains index configurations fields

## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index**| **string** | index name, to create or where update configuration  |
**document_key_name**| **string** | field which value will be used as document id [#DOCGENBUG REQUIRED FIELD]  | [optional]
**attributes**| [**\OpenAPI\Client\Model\SearchConfigSchemaAttribute[]**](SearchConfigSchemaAttribute.md) | fields that can be stored into index and later retrieved  |
**searchables**| [**\OpenAPI\Client\Model\SearchConfigSchemaSearchable[]**](SearchConfigSchemaSearchable.md) | fields that can be used for fulltext searches  | [optional]
**facets**| [**\OpenAPI\Client\Model\SearchConfigSchemaFacet[]**](SearchConfigSchemaFacet.md) | fields that can be used for aggregations  | [optional]
**filters**| [**\OpenAPI\Client\Model\SearchConfigSchemaFilter[]**](SearchConfigSchemaFilter.md) | fields that can be used for filtering  | [optional]
**sortables**| [**\OpenAPI\Client\Model\SearchConfigSchemaSortable[]**](SearchConfigSchemaSortable.md) | fields that can be used for sorting  | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

