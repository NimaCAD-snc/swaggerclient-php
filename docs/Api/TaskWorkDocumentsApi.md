# Swagger\Client\TaskWorkDocumentsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskWorkDocumentsGetTaskWorkDocumentPreviewBufferId**](TaskWorkDocumentsApi.md#taskWorkDocumentsGetTaskWorkDocumentPreviewBufferId) | **GET** /api/TaskWorkDocuments/documentPreviewBufferId | This call returns the bufferId for document preview


# **taskWorkDocumentsGetTaskWorkDocumentPreviewBufferId**
> string taskWorkDocumentsGetTaskWorkDocumentPreviewBufferId($processdoc_id, $taskwork_id)

This call returns the bufferId for document preview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processdoc_id = 56; // int | 
$taskwork_id = 56; // int | 

try {
    $result = $apiInstance->taskWorkDocumentsGetTaskWorkDocumentPreviewBufferId($processdoc_id, $taskwork_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkDocumentsApi->taskWorkDocumentsGetTaskWorkDocumentPreviewBufferId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **processdoc_id** | **int**|  |
 **taskwork_id** | **int**|  |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

