# OpenAPI\Client\SearchApi

All URIs are relative to https://search.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchConfiguration()**](SearchApi.md#searchConfiguration) | **POST** /search.Search/Configuration | Indexes configuration |
| [**searchDelete()**](SearchApi.md#searchDelete) | **POST** /search.Search/Delete | Delete Indexes |
| [**searchInsertOrReplace()**](SearchApi.md#searchInsertOrReplace) | **POST** /search.Search/InsertOrReplace | Insert or replace documents to different elasticsearch indexes |
| [**searchMSearch()**](SearchApi.md#searchMSearch) | **POST** /search.Search/MSearch | Send queries to different elasticsearch indexes |
| [**searchUpdate()**](SearchApi.md#searchUpdate) | **POST** /search.Search/Update | Update documents to different elasticsearch indexes |


## `searchConfiguration()`

```php
searchConfiguration($body): object
```

Indexes configuration

Create or update indexes by a passed configuration schema

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: geminiAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Gem-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Gem-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\SearchConfigRequest(); // \OpenAPI\Client\Model\SearchConfigRequest

try {
    $result = $apiInstance->searchConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SearchConfigRequest**](../Model/SearchConfigRequest.md)|  | |

### Return type

**object**

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [geminiAuthorization](../../README.md#geminiAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchDelete()`

```php
searchDelete($body): \OpenAPI\Client\Model\SearchDeleteResponse
```

Delete Indexes

Delete indexes from ElasticSearch and Cassandra configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: geminiAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Gem-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Gem-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\SearchDeleteRequest(); // \OpenAPI\Client\Model\SearchDeleteRequest

try {
    $result = $apiInstance->searchDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SearchDeleteRequest**](../Model/SearchDeleteRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SearchDeleteResponse**](../Model/SearchDeleteResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [geminiAuthorization](../../README.md#geminiAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchInsertOrReplace()`

```php
searchInsertOrReplace($body): \OpenAPI\Client\Model\SearchWriteResponse
```

Insert or replace documents to different elasticsearch indexes

Insert or replace a document or more in a specified ElasticSearch index of a tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: geminiAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Gem-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Gem-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\SearchWriteRequest(); // \OpenAPI\Client\Model\SearchWriteRequest

try {
    $result = $apiInstance->searchInsertOrReplace($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchInsertOrReplace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SearchWriteRequest**](../Model/SearchWriteRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SearchWriteResponse**](../Model/SearchWriteResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [geminiAuthorization](../../README.md#geminiAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchMSearch()`

```php
searchMSearch($body): \OpenAPI\Client\Model\SearchQueryResponse
```

Send queries to different elasticsearch indexes

MSearch promises to send a list of queries to elasticsearch to be executed on different indexes, it can also be used as an autocomplete by adding the corresponding TYPE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: geminiAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Gem-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Gem-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\SearchQueryRequest(); // \OpenAPI\Client\Model\SearchQueryRequest

try {
    $result = $apiInstance->searchMSearch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchMSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SearchQueryRequest**](../Model/SearchQueryRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SearchQueryResponse**](../Model/SearchQueryResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [geminiAuthorization](../../README.md#geminiAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchUpdate()`

```php
searchUpdate($body): \OpenAPI\Client\Model\SearchWriteResponse
```

Update documents to different elasticsearch indexes

Update a document or more in a specified ElasticSearch index of a tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: geminiAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Gem-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Gem-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\SearchWriteRequest(); // \OpenAPI\Client\Model\SearchWriteRequest

try {
    $result = $apiInstance->searchUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SearchWriteRequest**](../Model/SearchWriteRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SearchWriteResponse**](../Model/SearchWriteResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [geminiAuthorization](../../README.md#geminiAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
