<?php
/**
 * AddMemberApi
 * PHP version 5
 *
 * @category Class
 * @package  Everlesson
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace Everlesson\Api;

use \Everlesson\Configuration;
use \Everlesson\ApiClient;
use \Everlesson\ApiException;
use \Everlesson\ObjectSerializer;

/**
 * AddMemberApi Class Doc Comment
 *
 * @category Class
 * @package  Everlesson
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddMemberApi
{

    /**
     * API Client
     * @var \Everlesson\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Everlesson\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://api.memberportal.io/v0');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Everlesson\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Everlesson\ApiClient $apiClient set the API client
     * @return AddMemberApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * createMember
     *
     * 
     *
     * @param string $token token (required)
     * @param string $membership_id membership_id (required)
     * @param string $firstname firstname (required)
     * @param string $lastname lastname (required)
     * @param string $email email (required)
     * @param string $password password (required)
     * @param string $level_package need to pass the levels /packages id&#39;s to add on member, (examples: 32732,32534) Need to pass the id by comma seperated (optional)
     * @return \Everlesson\Model\CreateMember
     * @throws \Everlesson\ApiException on non-2xx response
     */
    public function createMember($token, $membership_id, $firstname, $lastname, $email, $password, $level_package = null)
    {
        list($response, $statusCode, $httpHeader) = $this->createMemberWithHttpInfo ($token, $membership_id, $firstname, $lastname, $email, $password, $level_package);
        return $response; 
    }


    /**
     * createMemberWithHttpInfo
     *
     * 
     *
     * @param string $token token (required)
     * @param string $membership_id membership_id (required)
     * @param string $firstname firstname (required)
     * @param string $lastname lastname (required)
     * @param string $email email (required)
     * @param string $password password (required)
     * @param string $level_package need to pass the levels /packages id&#39;s to add on member, (examples: 32732,32534) Need to pass the id by comma seperated (optional)
     * @return Array of \Everlesson\Model\CreateMember, HTTP status code, HTTP response headers (array of strings)
     * @throws \Everlesson\ApiException on non-2xx response
     */
    public function createMemberWithHttpInfo($token, $membership_id, $firstname, $lastname, $email, $password, $level_package = null)
    {
        
        // verify the required parameter 'token' is set
        if ($token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling createMember');
        }
        // verify the required parameter 'membership_id' is set
        if ($membership_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $membership_id when calling createMember');
        }
        // verify the required parameter 'firstname' is set
        if ($firstname === null) {
            throw new \InvalidArgumentException('Missing the required parameter $firstname when calling createMember');
        }
        // verify the required parameter 'lastname' is set
        if ($lastname === null) {
            throw new \InvalidArgumentException('Missing the required parameter $lastname when calling createMember');
        }
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling createMember');
        }
        // verify the required parameter 'password' is set
        if ($password === null) {
            throw new \InvalidArgumentException('Missing the required parameter $password when calling createMember');
        }
  
        // parse inputs
        $resourcePath = "/addMember";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/x-www-form-urlencoded'));
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($token !== null) {
            
            
            $formParams['token'] = $this->apiClient->getSerializer()->toFormValue($token);
            
        }// form params
        if ($membership_id !== null) {
            
            
            $formParams['membership_id'] = $this->apiClient->getSerializer()->toFormValue($membership_id);
            
        }// form params
        if ($firstname !== null) {
            
            
            $formParams['firstname'] = $this->apiClient->getSerializer()->toFormValue($firstname);
            
        }// form params
        if ($lastname !== null) {
            
            
            $formParams['lastname'] = $this->apiClient->getSerializer()->toFormValue($lastname);
            
        }// form params
        if ($email !== null) {
            
            
            $formParams['email'] = $this->apiClient->getSerializer()->toFormValue($email);
            
        }// form params
        if ($password !== null) {
            
            
            $formParams['password'] = $this->apiClient->getSerializer()->toFormValue($password);
            
        }// form params
        if ($level_package !== null) {
            
            
            $formParams['level_package'] = $this->apiClient->getSerializer()->toFormValue($level_package);
            
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
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Everlesson\Model\CreateMember'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Everlesson\ObjectSerializer::deserialize($response, '\Everlesson\Model\CreateMember', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Everlesson\ObjectSerializer::deserialize($e->getResponseBody(), '\Everlesson\Model\CreateMember', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
