<?php
/**
 * FindDTO
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
 * FindDTO Class Doc Comment
 *
 * @category Class
 * @description Class of find data
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FindDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FindDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'description' => 'string',
        'owner' => 'int',
        'owner_description' => 'string',
        'context' => 'int',
        'show_fields' => 'bool',
        'form_open' => 'bool',
        'show_on_desktop' => 'bool',
        'folder_id' => 'int',
        'external_id' => 'string',
        'table_name' => 'string',
        'table_field_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'description' => null,
        'owner' => 'int32',
        'owner_description' => null,
        'context' => 'int32',
        'show_fields' => null,
        'form_open' => null,
        'show_on_desktop' => null,
        'folder_id' => 'int32',
        'external_id' => null,
        'table_name' => null,
        'table_field_id' => null
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
        'description' => 'description',
        'owner' => 'owner',
        'owner_description' => 'ownerDescription',
        'context' => 'context',
        'show_fields' => 'showFields',
        'form_open' => 'formOpen',
        'show_on_desktop' => 'showOnDesktop',
        'folder_id' => 'folderId',
        'external_id' => 'externalId',
        'table_name' => 'tableName',
        'table_field_id' => 'tableFieldId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'description' => 'setDescription',
        'owner' => 'setOwner',
        'owner_description' => 'setOwnerDescription',
        'context' => 'setContext',
        'show_fields' => 'setShowFields',
        'form_open' => 'setFormOpen',
        'show_on_desktop' => 'setShowOnDesktop',
        'folder_id' => 'setFolderId',
        'external_id' => 'setExternalId',
        'table_name' => 'setTableName',
        'table_field_id' => 'setTableFieldId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'description' => 'getDescription',
        'owner' => 'getOwner',
        'owner_description' => 'getOwnerDescription',
        'context' => 'getContext',
        'show_fields' => 'getShowFields',
        'form_open' => 'getFormOpen',
        'show_on_desktop' => 'getShowOnDesktop',
        'folder_id' => 'getFolderId',
        'external_id' => 'getExternalId',
        'table_name' => 'getTableName',
        'table_field_id' => 'getTableFieldId'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['owner_description'] = isset($data['owner_description']) ? $data['owner_description'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['show_fields'] = isset($data['show_fields']) ? $data['show_fields'] : null;
        $this->container['form_open'] = isset($data['form_open']) ? $data['form_open'] : null;
        $this->container['show_on_desktop'] = isset($data['show_on_desktop']) ? $data['show_on_desktop'] : null;
        $this->container['folder_id'] = isset($data['folder_id']) ? $data['folder_id'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['table_name'] = isset($data['table_name']) ? $data['table_name'] : null;
        $this->container['table_field_id'] = isset($data['table_field_id']) ? $data['table_field_id'] : null;
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return int
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param int $owner Author
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets owner_description
     *
     * @return string
     */
    public function getOwnerDescription()
    {
        return $this->container['owner_description'];
    }

    /**
     * Sets owner_description
     *
     * @param string $owner_description Author Description
     *
     * @return $this
     */
    public function setOwnerDescription($owner_description)
    {
        $this->container['owner_description'] = $owner_description;

        return $this;
    }

    /**
     * Gets context
     *
     * @return int
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param int $context Possible values:  0: Dm_Profile_Search  1: Dm_ElencoPratiche_Search  2: Dm_TaskWork_Search  3: Dm_UtentiBase_Search  4: Dm_Contatti_Search  5: ExternalData  6: Dm_Profile_Search_For_Fasciculation  7: Dm_Profile_Search_For_User_Default  8: Dm_Contatti_Search_For_User_Default
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets show_fields
     *
     * @return bool
     */
    public function getShowFields()
    {
        return $this->container['show_fields'];
    }

    /**
     * Sets show_fields
     *
     * @param bool $show_fields Show Fields
     *
     * @return $this
     */
    public function setShowFields($show_fields)
    {
        $this->container['show_fields'] = $show_fields;

        return $this;
    }

    /**
     * Gets form_open
     *
     * @return bool
     */
    public function getFormOpen()
    {
        return $this->container['form_open'];
    }

    /**
     * Sets form_open
     *
     * @param bool $form_open Open the Form
     *
     * @return $this
     */
    public function setFormOpen($form_open)
    {
        $this->container['form_open'] = $form_open;

        return $this;
    }

    /**
     * Gets show_on_desktop
     *
     * @return bool
     */
    public function getShowOnDesktop()
    {
        return $this->container['show_on_desktop'];
    }

    /**
     * Sets show_on_desktop
     *
     * @param bool $show_on_desktop Show on Desktop
     *
     * @return $this
     */
    public function setShowOnDesktop($show_on_desktop)
    {
        $this->container['show_on_desktop'] = $show_on_desktop;

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
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id External Identifier
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets table_name
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->container['table_name'];
    }

    /**
     * Sets table_name
     *
     * @param string $table_name Table Name
     *
     * @return $this
     */
    public function setTableName($table_name)
    {
        $this->container['table_name'] = $table_name;

        return $this;
    }

    /**
     * Gets table_field_id
     *
     * @return string
     */
    public function getTableFieldId()
    {
        return $this->container['table_field_id'];
    }

    /**
     * Sets table_field_id
     *
     * @param string $table_field_id Table Field Identifier
     *
     * @return $this
     */
    public function setTableFieldId($table_field_id)
    {
        $this->container['table_field_id'] = $table_field_id;

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


