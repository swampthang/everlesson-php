<?php
/**
 * Category
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
 * Category Class Doc Comment
 *
 * @category    Class
 * @description Model for Category
 * @package     Everlesson
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Category implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'category_id' => 'string',
        'category_name' => 'string',
        'short_description' => 'string',
        'thumb_img' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'category_id' => 'category_id',
        'category_name' => 'category_name',
        'short_description' => 'short_description',
        'thumb_img' => 'thumb_img'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'category_id' => 'setCategoryId',
        'category_name' => 'setCategoryName',
        'short_description' => 'setShortDescription',
        'thumb_img' => 'setThumbImg'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'category_id' => 'getCategoryId',
        'category_name' => 'getCategoryName',
        'short_description' => 'getShortDescription',
        'thumb_img' => 'getThumbImg'
    );
  
    
    /**
      * $category_id 
      * @var string
      */
    protected $category_id;
    
    /**
      * $category_name 
      * @var string
      */
    protected $category_name;
    
    /**
      * $short_description 
      * @var string
      */
    protected $short_description;
    
    /**
      * $thumb_img 
      * @var string
      */
    protected $thumb_img;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->category_id = $data["category_id"];
            $this->category_name = $data["category_name"];
            $this->short_description = $data["short_description"];
            $this->thumb_img = $data["thumb_img"];
        }
    }
    
    /**
     * Gets category_id
     * @return string
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }
  
    /**
     * Sets category_id
     * @param string $category_id 
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        
        $this->category_id = $category_id;
        return $this;
    }
    
    /**
     * Gets category_name
     * @return string
     */
    public function getCategoryName()
    {
        return $this->category_name;
    }
  
    /**
     * Sets category_name
     * @param string $category_name 
     * @return $this
     */
    public function setCategoryName($category_name)
    {
        
        $this->category_name = $category_name;
        return $this;
    }
    
    /**
     * Gets short_description
     * @return string
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }
  
    /**
     * Sets short_description
     * @param string $short_description 
     * @return $this
     */
    public function setShortDescription($short_description)
    {
        
        $this->short_description = $short_description;
        return $this;
    }
    
    /**
     * Gets thumb_img
     * @return string
     */
    public function getThumbImg()
    {
        return $this->thumb_img;
    }
  
    /**
     * Sets thumb_img
     * @param string $thumb_img 
     * @return $this
     */
    public function setThumbImg($thumb_img)
    {
        
        $this->thumb_img = $thumb_img;
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
