# search

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Gemini-Commerce/php-client-search.git"
    }
  ],
  "require": {
    "Gemini-Commerce/php-client-search": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/search/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\Search\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Search\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: geminiAuthorization
$config = GeminiCommerce\Search\Configuration::getDefaultConfiguration()->setApiKey('X-Gem-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Search\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Gem-Token', 'Bearer');


$apiInstance = new GeminiCommerce\Search\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Search\Model\SearchConfigRequest(); // \GeminiCommerce\Search\Model\SearchConfigRequest

try {
    $result = $apiInstance->searchConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchConfiguration: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://search.api.gogemini.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SearchApi* | [**searchConfiguration**](docs/Api/SearchApi.md#searchconfiguration) | **POST** /search.Search/Configuration | Indexes configuration
*SearchApi* | [**searchDelete**](docs/Api/SearchApi.md#searchdelete) | **POST** /search.Search/Delete | Delete Indexes
*SearchApi* | [**searchInsertOrReplace**](docs/Api/SearchApi.md#searchinsertorreplace) | **POST** /search.Search/InsertOrReplace | Insert or replace documents to different elasticsearch indexes
*SearchApi* | [**searchMSearch**](docs/Api/SearchApi.md#searchmsearch) | **POST** /search.Search/MSearch | Send queries to different elasticsearch indexes
*SearchApi* | [**searchUpdate**](docs/Api/SearchApi.md#searchupdate) | **POST** /search.Search/Update | Update documents to different elasticsearch indexes

## Models

- [ParamSortOrder](docs/Model/ParamSortOrder.md)
- [ProtobufAny](docs/Model/ProtobufAny.md)
- [RpcStatus](docs/Model/RpcStatus.md)
- [SearchAggrMap](docs/Model/SearchAggrMap.md)
- [SearchConfigRequest](docs/Model/SearchConfigRequest.md)
- [SearchConfigSchema](docs/Model/SearchConfigSchema.md)
- [SearchConfigSchemaAttribute](docs/Model/SearchConfigSchemaAttribute.md)
- [SearchConfigSchemaAttributeType](docs/Model/SearchConfigSchemaAttributeType.md)
- [SearchConfigSchemaFacet](docs/Model/SearchConfigSchemaFacet.md)
- [SearchConfigSchemaFilter](docs/Model/SearchConfigSchemaFilter.md)
- [SearchConfigSchemaSearchable](docs/Model/SearchConfigSchemaSearchable.md)
- [SearchConfigSchemaSortable](docs/Model/SearchConfigSchemaSortable.md)
- [SearchDeleteConstraints](docs/Model/SearchDeleteConstraints.md)
- [SearchDeleteError](docs/Model/SearchDeleteError.md)
- [SearchDeleteRequest](docs/Model/SearchDeleteRequest.md)
- [SearchDeleteResponse](docs/Model/SearchDeleteResponse.md)
- [SearchParamAttribute](docs/Model/SearchParamAttribute.md)
- [SearchParamFacet](docs/Model/SearchParamFacet.md)
- [SearchParamFacetType](docs/Model/SearchParamFacetType.md)
- [SearchParamFilter](docs/Model/SearchParamFilter.md)
- [SearchParamFilterType](docs/Model/SearchParamFilterType.md)
- [SearchParamSearchable](docs/Model/SearchParamSearchable.md)
- [SearchParamSort](docs/Model/SearchParamSort.md)
- [SearchParams](docs/Model/SearchParams.md)
- [SearchPayload](docs/Model/SearchPayload.md)
- [SearchQueryError](docs/Model/SearchQueryError.md)
- [SearchQueryRequest](docs/Model/SearchQueryRequest.md)
- [SearchQueryRequestType](docs/Model/SearchQueryRequestType.md)
- [SearchQueryResponse](docs/Model/SearchQueryResponse.md)
- [SearchResult](docs/Model/SearchResult.md)
- [SearchWriteError](docs/Model/SearchWriteError.md)
- [SearchWriteRequest](docs/Model/SearchWriteRequest.md)
- [SearchWriteResponse](docs/Model/SearchWriteResponse.md)

## Authorization

Authentication schemes defined for the API:
### geminiAuthorization

- **Type**: API key
- **API key parameter name**: X-Gem-Token
- **Location**: HTTP header


### standardAuthorization

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@gemini-commerce.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
