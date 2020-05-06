<?php
/**
 * SharingHtmlDTO
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
 * SharingHtmlDTO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SharingHtmlDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SharingHtmlDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'html_kind' => 'int',
        'header' => 'string',
        'body_header' => 'string',
        'body_content' => 'string',
        'body_footer' => 'string',
        'footer' => 'string',
        'lang' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'html_kind' => 'int32',
        'header' => null,
        'body_header' => null,
        'body_content' => null,
        'body_footer' => null,
        'footer' => null,
        'lang' => null
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
        'html_kind' => 'htmlKind',
        'header' => 'header',
        'body_header' => 'bodyHeader',
        'body_content' => 'bodyContent',
        'body_footer' => 'bodyFooter',
        'footer' => 'footer',
        'lang' => 'lang'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'html_kind' => 'setHtmlKind',
        'header' => 'setHeader',
        'body_header' => 'setBodyHeader',
        'body_content' => 'setBodyContent',
        'body_footer' => 'setBodyFooter',
        'footer' => 'setFooter',
        'lang' => 'setLang'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'html_kind' => 'getHtmlKind',
        'header' => 'getHeader',
        'body_header' => 'getBodyHeader',
        'body_content' => 'getBodyContent',
        'body_footer' => 'getBodyFooter',
        'footer' => 'getFooter',
        'lang' => 'getLang'
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
        $this->container['html_kind'] = isset($data['html_kind']) ? $data['html_kind'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['body_header'] = isset($data['body_header']) ? $data['body_header'] : null;
        $this->container['body_content'] = isset($data['body_content']) ? $data['body_content'] : null;
        $this->container['body_footer'] = isset($data['body_footer']) ? $data['body_footer'] : null;
        $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
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
     * Gets html_kind
     *
     * @return int
     */
    public function getHtmlKind()
    {
        return $this->container['html_kind'];
    }

    /**
     * Sets html_kind
     *
     * @param int $html_kind Possible values:  0: Access  1: Expiration
     *
     * @return $this
     */
    public function setHtmlKind($html_kind)
    {
        $this->container['html_kind'] = $html_kind;

        return $this;
    }

    /**
     * Gets header
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param string $header Header
     *
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets body_header
     *
     * @return string
     */
    public function getBodyHeader()
    {
        return $this->container['body_header'];
    }

    /**
     * Sets body_header
     *
     * @param string $body_header Body Header.
     *
     * @return $this
     */
    public function setBodyHeader($body_header)
    {
        $this->container['body_header'] = $body_header;

        return $this;
    }

    /**
     * Gets body_content
     *
     * @return string
     */
    public function getBodyContent()
    {
        return $this->container['body_content'];
    }

    /**
     * Sets body_content
     *
     * @param string $body_content Body Content.
     *
     * @return $this
     */
    public function setBodyContent($body_content)
    {
        $this->container['body_content'] = $body_content;

        return $this;
    }

    /**
     * Gets body_footer
     *
     * @return string
     */
    public function getBodyFooter()
    {
        return $this->container['body_footer'];
    }

    /**
     * Sets body_footer
     *
     * @param string $body_footer Body footer.
     *
     * @return $this
     */
    public function setBodyFooter($body_footer)
    {
        $this->container['body_footer'] = $body_footer;

        return $this;
    }

    /**
     * Gets footer
     *
     * @return string
     */
    public function getFooter()
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer
     *
     * @param string $footer Footer
     *
     * @return $this
     */
    public function setFooter($footer)
    {
        $this->container['footer'] = $footer;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string $lang Lang Code.
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

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


