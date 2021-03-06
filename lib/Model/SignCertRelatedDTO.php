<?php
/**
 * SignCertRelatedDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Abletech.Arxivar.Server.WebApi.Services
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * SignCertRelatedDTO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignCertRelatedDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SignCertRelatedDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sign_cert_id' => 'int',
        'related_cert_id' => 'string',
        'related_cert_description' => 'string',
        'is_active' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sign_cert_id' => 'int32',
        'related_cert_id' => null,
        'related_cert_description' => null,
        'is_active' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sign_cert_id' => 'signCertId',
        'related_cert_id' => 'relatedCertId',
        'related_cert_description' => 'relatedCertDescription',
        'is_active' => 'isActive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sign_cert_id' => 'setSignCertId',
        'related_cert_id' => 'setRelatedCertId',
        'related_cert_description' => 'setRelatedCertDescription',
        'is_active' => 'setIsActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sign_cert_id' => 'getSignCertId',
        'related_cert_id' => 'getRelatedCertId',
        'related_cert_description' => 'getRelatedCertDescription',
        'is_active' => 'getIsActive'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['sign_cert_id'] = isset($data['sign_cert_id']) ? $data['sign_cert_id'] : null;
        $this->container['related_cert_id'] = isset($data['related_cert_id']) ? $data['related_cert_id'] : null;
        $this->container['related_cert_description'] = isset($data['related_cert_description']) ? $data['related_cert_description'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets sign_cert_id
     *
     * @return int
     */
    public function getSignCertId()
    {
        return $this->container['sign_cert_id'];
    }

    /**
     * Sets sign_cert_id
     *
     * @param int $sign_cert_id Identifier of signature certificate
     *
     * @return $this
     */
    public function setSignCertId($sign_cert_id)
    {
        $this->container['sign_cert_id'] = $sign_cert_id;

        return $this;
    }

    /**
     * Gets related_cert_id
     *
     * @return string
     */
    public function getRelatedCertId()
    {
        return $this->container['related_cert_id'];
    }

    /**
     * Sets related_cert_id
     *
     * @param string $related_cert_id Identifier of related certificate
     *
     * @return $this
     */
    public function setRelatedCertId($related_cert_id)
    {
        $this->container['related_cert_id'] = $related_cert_id;

        return $this;
    }

    /**
     * Gets related_cert_description
     *
     * @return string
     */
    public function getRelatedCertDescription()
    {
        return $this->container['related_cert_description'];
    }

    /**
     * Sets related_cert_description
     *
     * @param string $related_cert_description Description of related certificate
     *
     * @return $this
     */
    public function setRelatedCertDescription($related_cert_description)
    {
        $this->container['related_cert_description'] = $related_cert_description;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Certificate is Active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


