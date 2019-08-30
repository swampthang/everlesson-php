<?php
/**
 * GetPaymentdetails
 *
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

namespace Everlesson\Model;

use \ArrayAccess;
/**
 * GetPaymentdetails Class Doc Comment
 *
 * @category    Class
 * @description Model for GetPaymentdetails
 * @package     Everlesson
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetPaymentdetails implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'amount' => 'string',
        'button_code' => 'string',
        'string_url' => 'string',
        'url' => 'string[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'amount' => 'amount',
        'button_code' => 'button_code',
        'string_url' => 'string_url',
        'url' => 'url'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'amount' => 'setAmount',
        'button_code' => 'setButtonCode',
        'string_url' => 'setStringUrl',
        'url' => 'setUrl'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'amount' => 'getAmount',
        'button_code' => 'getButtonCode',
        'string_url' => 'getStringUrl',
        'url' => 'getUrl'
    );
  
    
    /**
      * $amount 
      * @var string
      */
    protected $amount;
    
    /**
      * $button_code 
      * @var string
      */
    protected $button_code;
    
    /**
      * $string_url 
      * @var string
      */
    protected $string_url;
    
    /**
      * $url 
      * @var string[]
      */
    protected $url;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->amount = $data["amount"];
            $this->button_code = $data["button_code"];
            $this->string_url = $data["string_url"];
            $this->url = $data["url"];
        }
    }
    
    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }
  
    /**
     * Sets amount
     * @param string $amount 
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets button_code
     * @return string
     */
    public function getButtonCode()
    {
        return $this->button_code;
    }
  
    /**
     * Sets button_code
     * @param string $button_code 
     * @return $this
     */
    public function setButtonCode($button_code)
    {
        
        $this->button_code = $button_code;
        return $this;
    }
    
    /**
     * Gets string_url
     * @return string
     */
    public function getStringUrl()
    {
        return $this->string_url;
    }
  
    /**
     * Sets string_url
     * @param string $string_url 
     * @return $this
     */
    public function setStringUrl($string_url)
    {
        
        $this->string_url = $string_url;
        return $this;
    }
    
    /**
     * Gets url
     * @return string[]
     */
    public function getUrl()
    {
        return $this->url;
    }
  
    /**
     * Sets url
     * @param string[] $url 
     * @return $this
     */
    public function setUrl($url)
    {
        
        $this->url = $url;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Everlesson\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Everlesson\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}