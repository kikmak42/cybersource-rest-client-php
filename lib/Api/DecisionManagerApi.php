<?php
/**
 * DecisionManagerApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;

/**
 * DecisionManagerApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DecisionManagerApi
{
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return DecisionManagerApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createDecisionManagerCase
     *
     * Create Decision Manager Case
     *
     * @param \CyberSource\Model\CreateDecisionManagerCaseRequest $createDecisionManagerCaseRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return \CyberSource\Model\RiskV1DecisionsPost201Response
     */
    public function createDecisionManagerCase($createDecisionManagerCaseRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->createDecisionManagerCaseWithHttpInfo($createDecisionManagerCaseRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createDecisionManagerCaseWithHttpInfo
     *
     * Create Decision Manager Case
     *
     * @param \CyberSource\Model\CreateDecisionManagerCaseRequest $createDecisionManagerCaseRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\RiskV1DecisionsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDecisionManagerCaseWithHttpInfo($createDecisionManagerCaseRequest)
    {
        // verify the required parameter 'createDecisionManagerCaseRequest' is set
        if ($createDecisionManagerCaseRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $createDecisionManagerCaseRequest when calling createDecisionManagerCase');
        }
        // parse inputs
        $resourcePath = "/risk/v1/decisions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($createDecisionManagerCaseRequest)) {
            $_tempBody = $createDecisionManagerCaseRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\RiskV1DecisionsPost201Response',
                '/risk/v1/decisions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\RiskV1DecisionsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RiskV1DecisionsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RiskV1DecisionsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
