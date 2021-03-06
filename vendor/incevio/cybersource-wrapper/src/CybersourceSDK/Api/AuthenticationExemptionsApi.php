<?php
/**
 * AuthenticationExemptionsApi
 * PHP version 5
 *
 * @category Class
 * @package  Incevio\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Incevio\Cybersource\CybersourceSDK Merged Spec
 *
 * All Incevio\Cybersource\CybersourceSDK API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
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

namespace Incevio\Cybersource\CybersourceSDK\Api;

use \Incevio\Cybersource\CybersourceSDK\ApiClient;
use \Incevio\Cybersource\CybersourceSDK\ApiException;
use \Incevio\Cybersource\CybersourceSDK\Configuration;
use \Incevio\Cybersource\CybersourceSDK\ObjectSerializer;

/**
 * AuthenticationExemptionsApi Class Doc Comment
 *
 * @category Class
 * @package  Incevio\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationExemptionsApi
{
    /**
     * API Client
     *
     * @var \Incevio\Cybersource\CybersourceSDK\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Incevio\Cybersource\CybersourceSDK\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Incevio\Cybersource\CybersourceSDK\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Incevio\Cybersource\CybersourceSDK\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Incevio\Cybersource\CybersourceSDK\ApiClient $apiClient set the API client
     *
     * @return AuthenticationExemptionsApi
     */
    public function setApiClient(\Incevio\Cybersource\CybersourceSDK\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation authenticationExemptions
     *
     * Authentication Exemptions Service
     *
     * @param \Incevio\Cybersource\CybersourceSDK\Model\AuthenticationExemptionsRequest $authenticationExemptionsRequest  (required)
     * @throws \Incevio\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Incevio\Cybersource\CybersourceSDK\Model\RiskV1AuthenticationExemptionsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function authenticationExemptions($authenticationExemptionsRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->authenticationExemptionsWithHttpInfo($authenticationExemptionsRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation authenticationExemptionsWithHttpInfo
     *
     * Authentication Exemptions Service
     *
     * @param \Incevio\Cybersource\CybersourceSDK\Model\AuthenticationExemptionsRequest $authenticationExemptionsRequest  (required)
     * @throws \Incevio\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Incevio\Cybersource\CybersourceSDK\Model\RiskV1AuthenticationExemptionsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function authenticationExemptionsWithHttpInfo($authenticationExemptionsRequest)
    {
        // verify the required parameter 'authenticationExemptionsRequest' is set
        if ($authenticationExemptionsRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authenticationExemptionsRequest when calling authenticationExemptions');
        }
        // parse inputs
        $resourcePath = "/risk/v1/authentication-exemptions";
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
        if (isset($authenticationExemptionsRequest)) {
            $_tempBody = $authenticationExemptionsRequest;
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
                '\Incevio\Cybersource\CybersourceSDK\Model\RiskV1AuthenticationExemptionsPost201Response',
                '/risk/v1/authentication-exemptions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Incevio\Cybersource\CybersourceSDK\Model\RiskV1AuthenticationExemptionsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Incevio\Cybersource\CybersourceSDK\Model\RiskV1AuthenticationExemptionsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Incevio\Cybersource\CybersourceSDK\Model\RiskV1AuthenticationExcemptionsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Incevio\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
