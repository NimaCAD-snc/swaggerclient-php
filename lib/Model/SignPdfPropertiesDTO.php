<?php
/**
 * SignPdfPropertiesDTO
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
 * SignPdfPropertiesDTO Class Doc Comment
 *
 * @category Class
 * @description Class of settings of pdf signature
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignPdfPropertiesDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SignPdfPropertiesDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'page' => 'int',
        'position_x' => 'int',
        'position_y' => 'int',
        'size_width' => 'int',
        'size_height' => 'int',
        'reason' => 'string',
        'show_cn' => 'bool',
        'show_email' => 'bool',
        'show_cf' => 'bool',
        'show_issuer' => 'bool',
        'show_time' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'page' => 'int32',
        'position_x' => 'int32',
        'position_y' => 'int32',
        'size_width' => 'int32',
        'size_height' => 'int32',
        'reason' => null,
        'show_cn' => null,
        'show_email' => null,
        'show_cf' => null,
        'show_issuer' => null,
        'show_time' => null
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
        'page' => 'page',
        'position_x' => 'positionX',
        'position_y' => 'positionY',
        'size_width' => 'sizeWidth',
        'size_height' => 'sizeHeight',
        'reason' => 'reason',
        'show_cn' => 'showCN',
        'show_email' => 'showEmail',
        'show_cf' => 'showCF',
        'show_issuer' => 'showIssuer',
        'show_time' => 'showTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'page' => 'setPage',
        'position_x' => 'setPositionX',
        'position_y' => 'setPositionY',
        'size_width' => 'setSizeWidth',
        'size_height' => 'setSizeHeight',
        'reason' => 'setReason',
        'show_cn' => 'setShowCn',
        'show_email' => 'setShowEmail',
        'show_cf' => 'setShowCf',
        'show_issuer' => 'setShowIssuer',
        'show_time' => 'setShowTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'page' => 'getPage',
        'position_x' => 'getPositionX',
        'position_y' => 'getPositionY',
        'size_width' => 'getSizeWidth',
        'size_height' => 'getSizeHeight',
        'reason' => 'getReason',
        'show_cn' => 'getShowCn',
        'show_email' => 'getShowEmail',
        'show_cf' => 'getShowCf',
        'show_issuer' => 'getShowIssuer',
        'show_time' => 'getShowTime'
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
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['position_x'] = isset($data['position_x']) ? $data['position_x'] : null;
        $this->container['position_y'] = isset($data['position_y']) ? $data['position_y'] : null;
        $this->container['size_width'] = isset($data['size_width']) ? $data['size_width'] : null;
        $this->container['size_height'] = isset($data['size_height']) ? $data['size_height'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['show_cn'] = isset($data['show_cn']) ? $data['show_cn'] : null;
        $this->container['show_email'] = isset($data['show_email']) ? $data['show_email'] : null;
        $this->container['show_cf'] = isset($data['show_cf']) ? $data['show_cf'] : null;
        $this->container['show_issuer'] = isset($data['show_issuer']) ? $data['show_issuer'] : null;
        $this->container['show_time'] = isset($data['show_time']) ? $data['show_time'] : null;
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
     * Gets page
     *
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int $page Page Number
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets position_x
     *
     * @return int
     */
    public function getPositionX()
    {
        return $this->container['position_x'];
    }

    /**
     * Sets position_x
     *
     * @param int $position_x X Positin
     *
     * @return $this
     */
    public function setPositionX($position_x)
    {
        $this->container['position_x'] = $position_x;

        return $this;
    }

    /**
     * Gets position_y
     *
     * @return int
     */
    public function getPositionY()
    {
        return $this->container['position_y'];
    }

    /**
     * Sets position_y
     *
     * @param int $position_y Y Position
     *
     * @return $this
     */
    public function setPositionY($position_y)
    {
        $this->container['position_y'] = $position_y;

        return $this;
    }

    /**
     * Gets size_width
     *
     * @return int
     */
    public function getSizeWidth()
    {
        return $this->container['size_width'];
    }

    /**
     * Sets size_width
     *
     * @param int $size_width Width
     *
     * @return $this
     */
    public function setSizeWidth($size_width)
    {
        $this->container['size_width'] = $size_width;

        return $this;
    }

    /**
     * Gets size_height
     *
     * @return int
     */
    public function getSizeHeight()
    {
        return $this->container['size_height'];
    }

    /**
     * Sets size_height
     *
     * @param int $size_height Heigth
     *
     * @return $this
     */
    public function setSizeHeight($size_height)
    {
        $this->container['size_height'] = $size_height;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason Reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets show_cn
     *
     * @return bool
     */
    public function getShowCn()
    {
        return $this->container['show_cn'];
    }

    /**
     * Sets show_cn
     *
     * @param bool $show_cn Label of Common Name
     *
     * @return $this
     */
    public function setShowCn($show_cn)
    {
        $this->container['show_cn'] = $show_cn;

        return $this;
    }

    /**
     * Gets show_email
     *
     * @return bool
     */
    public function getShowEmail()
    {
        return $this->container['show_email'];
    }

    /**
     * Sets show_email
     *
     * @param bool $show_email Show Email
     *
     * @return $this
     */
    public function setShowEmail($show_email)
    {
        $this->container['show_email'] = $show_email;

        return $this;
    }

    /**
     * Gets show_cf
     *
     * @return bool
     */
    public function getShowCf()
    {
        return $this->container['show_cf'];
    }

    /**
     * Sets show_cf
     *
     * @param bool $show_cf Show Fiscal Code
     *
     * @return $this
     */
    public function setShowCf($show_cf)
    {
        $this->container['show_cf'] = $show_cf;

        return $this;
    }

    /**
     * Gets show_issuer
     *
     * @return bool
     */
    public function getShowIssuer()
    {
        return $this->container['show_issuer'];
    }

    /**
     * Sets show_issuer
     *
     * @param bool $show_issuer Show Issuer
     *
     * @return $this
     */
    public function setShowIssuer($show_issuer)
    {
        $this->container['show_issuer'] = $show_issuer;

        return $this;
    }

    /**
     * Gets show_time
     *
     * @return bool
     */
    public function getShowTime()
    {
        return $this->container['show_time'];
    }

    /**
     * Sets show_time
     *
     * @param bool $show_time Show Datetime of Signature
     *
     * @return $this
     */
    public function setShowTime($show_time)
    {
        $this->container['show_time'] = $show_time;

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

