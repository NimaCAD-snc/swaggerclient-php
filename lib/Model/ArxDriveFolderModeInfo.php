<?php
/**
 * ArxDriveFolderModeInfo
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
 * ArxDriveFolderModeInfo Class Doc Comment
 *
 * @category Class
 * @description Class of information folder for ARXDrive
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ArxDriveFolderModeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ArxDriveFolderModeInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'author' => 'int',
        'folder_id' => 'int',
        'custom_folder_name' => 'string',
        'use_custom_folder_name' => 'bool',
        'creation_date_time' => '\DateTime',
        'users' => '\Swagger\Client\Model\ArxDriveFolderModeUserInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'author' => 'int32',
        'folder_id' => 'int32',
        'custom_folder_name' => null,
        'use_custom_folder_name' => null,
        'creation_date_time' => 'date-time',
        'users' => null
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
        'id' => 'id',
        'author' => 'author',
        'folder_id' => 'folderId',
        'custom_folder_name' => 'customFolderName',
        'use_custom_folder_name' => 'useCustomFolderName',
        'creation_date_time' => 'creationDateTime',
        'users' => 'users'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'author' => 'setAuthor',
        'folder_id' => 'setFolderId',
        'custom_folder_name' => 'setCustomFolderName',
        'use_custom_folder_name' => 'setUseCustomFolderName',
        'creation_date_time' => 'setCreationDateTime',
        'users' => 'setUsers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'author' => 'getAuthor',
        'folder_id' => 'getFolderId',
        'custom_folder_name' => 'getCustomFolderName',
        'use_custom_folder_name' => 'getUseCustomFolderName',
        'creation_date_time' => 'getCreationDateTime',
        'users' => 'getUsers'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['folder_id'] = isset($data['folder_id']) ? $data['folder_id'] : null;
        $this->container['custom_folder_name'] = isset($data['custom_folder_name']) ? $data['custom_folder_name'] : null;
        $this->container['use_custom_folder_name'] = isset($data['use_custom_folder_name']) ? $data['use_custom_folder_name'] : null;
        $this->container['creation_date_time'] = isset($data['creation_date_time']) ? $data['creation_date_time'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets author
     *
     * @return int
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param int $author Author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return int
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param int $folder_id Folder Identifier
     *
     * @return $this
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets custom_folder_name
     *
     * @return string
     */
    public function getCustomFolderName()
    {
        return $this->container['custom_folder_name'];
    }

    /**
     * Sets custom_folder_name
     *
     * @param string $custom_folder_name Custom Folder Name
     *
     * @return $this
     */
    public function setCustomFolderName($custom_folder_name)
    {
        $this->container['custom_folder_name'] = $custom_folder_name;

        return $this;
    }

    /**
     * Gets use_custom_folder_name
     *
     * @return bool
     */
    public function getUseCustomFolderName()
    {
        return $this->container['use_custom_folder_name'];
    }

    /**
     * Sets use_custom_folder_name
     *
     * @param bool $use_custom_folder_name Use Custom Name
     *
     * @return $this
     */
    public function setUseCustomFolderName($use_custom_folder_name)
    {
        $this->container['use_custom_folder_name'] = $use_custom_folder_name;

        return $this;
    }

    /**
     * Gets creation_date_time
     *
     * @return \DateTime
     */
    public function getCreationDateTime()
    {
        return $this->container['creation_date_time'];
    }

    /**
     * Sets creation_date_time
     *
     * @param \DateTime $creation_date_time Creation Date
     *
     * @return $this
     */
    public function setCreationDateTime($creation_date_time)
    {
        $this->container['creation_date_time'] = $creation_date_time;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \Swagger\Client\Model\ArxDriveFolderModeUserInfo[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \Swagger\Client\Model\ArxDriveFolderModeUserInfo[] $users Users
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

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


