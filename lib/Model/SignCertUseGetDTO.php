<?php
/**
 * SignCertUseGetDTO
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
 * SignCertUseGetDTO Class Doc Comment
 *
 * @category Class
 * @description Class of signature certificate use
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignCertUseGetDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SignCertUseGetDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sign_cert_id' => 'int',
        'cert_use_list' => '\Swagger\Client\Model\SignCertUseDTO[]',
        'cert_password_is_set' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sign_cert_id' => 'int32',
        'cert_use_list' => null,
        'cert_password_is_set' => null
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
        'cert_use_list' => 'certUseList',
        'cert_password_is_set' => 'certPasswordIsSet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sign_cert_id' => 'setSignCertId',
        'cert_use_list' => 'setCertUseList',
        'cert_password_is_set' => 'setCertPasswordIsSet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sign_cert_id' => 'getSignCertId',
        'cert_use_list' => 'getCertUseList',
        'cert_password_is_set' => 'getCertPasswordIsSet'
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
        $this->container['cert_use_list'] = isset($data['cert_use_list']) ? $data['cert_use_list'] : null;
        $this->container['cert_password_is_set'] = isset($data['cert_password_is_set']) ? $data['cert_password_is_set'] : null;
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
     * @param int $sign_cert_id Identifier of certificate
     *
     * @return $this
     */
    public function setSignCertId($sign_cert_id)
    {
        $this->container['sign_cert_id'] = $sign_cert_id;

        return $this;
    }

    /**
     * Gets cert_use_list
     *
     * @return \Swagger\Client\Model\SignCertUseDTO[]
     */
    public function getCertUseList()
    {
        return $this->container['cert_use_list'];
    }

    /**
     * Sets cert_use_list
     *
     * @param \Swagger\Client\Model\SignCertUseDTO[] $cert_use_list List of certificate use
     *
     * @return $this
     */
    public function setCertUseList($cert_use_list)
    {
        $this->container['cert_use_list'] = $cert_use_list;

        return $this;
    }

    /**
     * Gets cert_password_is_set
     *
     * @return bool
     */
    public function getCertPasswordIsSet()
    {
        return $this->container['cert_password_is_set'];
    }

    /**
     * Sets cert_password_is_set
     *
     * @param bool $cert_password_is_set Password is set
     *
     * @return $this
     */
    public function setCertPasswordIsSet($cert_password_is_set)
    {
        $this->container['cert_password_is_set'] = $cert_password_is_set;

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


