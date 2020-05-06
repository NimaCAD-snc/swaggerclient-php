<?php
/**
 * ModelConfigurationDTO
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
 * ModelConfigurationDTO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelConfigurationDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ModelConfigurationDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'predefined_profile' => '\Swagger\Client\Model\PredefinedProfileDTO',
        'mask' => '\Swagger\Client\Model\MaskDTO',
        'show_option' => 'int',
        'document_cache_id' => 'string',
        'preview_document_cache_id' => 'string',
        'fields_module' => '\Swagger\Client\Model\FieldsModuleDTO[]',
        'id' => 'int',
        'description' => 'string',
        'user' => 'int',
        'user_description' => 'string',
        'type' => 'int',
        'file_name' => 'string',
        'lock_modality' => 'int',
        'predefined_profile_id' => 'int',
        'group_id' => 'int',
        'group_name' => 'string',
        'extension' => 'string',
        'open_after_profilation' => 'bool',
        'mask_id' => 'string',
        'preview_file_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'predefined_profile' => null,
        'mask' => null,
        'show_option' => 'int32',
        'document_cache_id' => null,
        'preview_document_cache_id' => null,
        'fields_module' => null,
        'id' => 'int32',
        'description' => null,
        'user' => 'int32',
        'user_description' => null,
        'type' => 'int32',
        'file_name' => null,
        'lock_modality' => 'int32',
        'predefined_profile_id' => 'int32',
        'group_id' => 'int32',
        'group_name' => null,
        'extension' => null,
        'open_after_profilation' => null,
        'mask_id' => null,
        'preview_file_name' => null
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
        'predefined_profile' => 'predefinedProfile',
        'mask' => 'mask',
        'show_option' => 'showOption',
        'document_cache_id' => 'documentCacheId',
        'preview_document_cache_id' => 'previewDocumentCacheId',
        'fields_module' => 'fieldsModule',
        'id' => 'id',
        'description' => 'description',
        'user' => 'user',
        'user_description' => 'userDescription',
        'type' => 'type',
        'file_name' => 'fileName',
        'lock_modality' => 'lockModality',
        'predefined_profile_id' => 'predefinedProfileId',
        'group_id' => 'groupId',
        'group_name' => 'groupName',
        'extension' => 'extension',
        'open_after_profilation' => 'openAfterProfilation',
        'mask_id' => 'maskId',
        'preview_file_name' => 'previewFileName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'predefined_profile' => 'setPredefinedProfile',
        'mask' => 'setMask',
        'show_option' => 'setShowOption',
        'document_cache_id' => 'setDocumentCacheId',
        'preview_document_cache_id' => 'setPreviewDocumentCacheId',
        'fields_module' => 'setFieldsModule',
        'id' => 'setId',
        'description' => 'setDescription',
        'user' => 'setUser',
        'user_description' => 'setUserDescription',
        'type' => 'setType',
        'file_name' => 'setFileName',
        'lock_modality' => 'setLockModality',
        'predefined_profile_id' => 'setPredefinedProfileId',
        'group_id' => 'setGroupId',
        'group_name' => 'setGroupName',
        'extension' => 'setExtension',
        'open_after_profilation' => 'setOpenAfterProfilation',
        'mask_id' => 'setMaskId',
        'preview_file_name' => 'setPreviewFileName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'predefined_profile' => 'getPredefinedProfile',
        'mask' => 'getMask',
        'show_option' => 'getShowOption',
        'document_cache_id' => 'getDocumentCacheId',
        'preview_document_cache_id' => 'getPreviewDocumentCacheId',
        'fields_module' => 'getFieldsModule',
        'id' => 'getId',
        'description' => 'getDescription',
        'user' => 'getUser',
        'user_description' => 'getUserDescription',
        'type' => 'getType',
        'file_name' => 'getFileName',
        'lock_modality' => 'getLockModality',
        'predefined_profile_id' => 'getPredefinedProfileId',
        'group_id' => 'getGroupId',
        'group_name' => 'getGroupName',
        'extension' => 'getExtension',
        'open_after_profilation' => 'getOpenAfterProfilation',
        'mask_id' => 'getMaskId',
        'preview_file_name' => 'getPreviewFileName'
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
        $this->container['predefined_profile'] = isset($data['predefined_profile']) ? $data['predefined_profile'] : null;
        $this->container['mask'] = isset($data['mask']) ? $data['mask'] : null;
        $this->container['show_option'] = isset($data['show_option']) ? $data['show_option'] : null;
        $this->container['document_cache_id'] = isset($data['document_cache_id']) ? $data['document_cache_id'] : null;
        $this->container['preview_document_cache_id'] = isset($data['preview_document_cache_id']) ? $data['preview_document_cache_id'] : null;
        $this->container['fields_module'] = isset($data['fields_module']) ? $data['fields_module'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['user_description'] = isset($data['user_description']) ? $data['user_description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['lock_modality'] = isset($data['lock_modality']) ? $data['lock_modality'] : null;
        $this->container['predefined_profile_id'] = isset($data['predefined_profile_id']) ? $data['predefined_profile_id'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['group_name'] = isset($data['group_name']) ? $data['group_name'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['open_after_profilation'] = isset($data['open_after_profilation']) ? $data['open_after_profilation'] : null;
        $this->container['mask_id'] = isset($data['mask_id']) ? $data['mask_id'] : null;
        $this->container['preview_file_name'] = isset($data['preview_file_name']) ? $data['preview_file_name'] : null;
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
     * Gets predefined_profile
     *
     * @return \Swagger\Client\Model\PredefinedProfileDTO
     */
    public function getPredefinedProfile()
    {
        return $this->container['predefined_profile'];
    }

    /**
     * Sets predefined_profile
     *
     * @param \Swagger\Client\Model\PredefinedProfileDTO $predefined_profile Predefined profile for model
     *
     * @return $this
     */
    public function setPredefinedProfile($predefined_profile)
    {
        $this->container['predefined_profile'] = $predefined_profile;

        return $this;
    }

    /**
     * Gets mask
     *
     * @return \Swagger\Client\Model\MaskDTO
     */
    public function getMask()
    {
        return $this->container['mask'];
    }

    /**
     * Sets mask
     *
     * @param \Swagger\Client\Model\MaskDTO $mask Predefined Profile
     *
     * @return $this
     */
    public function setMask($mask)
    {
        $this->container['mask'] = $mask;

        return $this;
    }

    /**
     * Gets show_option
     *
     * @return int
     */
    public function getShowOption()
    {
        return $this->container['show_option'];
    }

    /**
     * Sets show_option
     *
     * @param int $show_option Possible values:  0: EmptyProfile  1: PredefinedProfile  2: Mask
     *
     * @return $this
     */
    public function setShowOption($show_option)
    {
        $this->container['show_option'] = $show_option;

        return $this;
    }

    /**
     * Gets document_cache_id
     *
     * @return string
     */
    public function getDocumentCacheId()
    {
        return $this->container['document_cache_id'];
    }

    /**
     * Sets document_cache_id
     *
     * @param string $document_cache_id File forTtemplate
     *
     * @return $this
     */
    public function setDocumentCacheId($document_cache_id)
    {
        $this->container['document_cache_id'] = $document_cache_id;

        return $this;
    }

    /**
     * Gets preview_document_cache_id
     *
     * @return string
     */
    public function getPreviewDocumentCacheId()
    {
        return $this->container['preview_document_cache_id'];
    }

    /**
     * Sets preview_document_cache_id
     *
     * @param string $preview_document_cache_id File for preview template
     *
     * @return $this
     */
    public function setPreviewDocumentCacheId($preview_document_cache_id)
    {
        $this->container['preview_document_cache_id'] = $preview_document_cache_id;

        return $this;
    }

    /**
     * Gets fields_module
     *
     * @return \Swagger\Client\Model\FieldsModuleDTO[]
     */
    public function getFieldsModule()
    {
        return $this->container['fields_module'];
    }

    /**
     * Sets fields_module
     *
     * @param \Swagger\Client\Model\FieldsModuleDTO[] $fields_module Fields
     *
     * @return $this
     */
    public function setFieldsModule($fields_module)
    {
        $this->container['fields_module'] = $fields_module;

        return $this;
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
     * Gets user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param int $user Author
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets user_description
     *
     * @return string
     */
    public function getUserDescription()
    {
        return $this->container['user_description'];
    }

    /**
     * Sets user_description
     *
     * @param string $user_description Author's model name
     *
     * @return $this
     */
    public function setUserDescription($user_description)
    {
        $this->container['user_description'] = $user_description;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type Possible values:  1: Public  2: Private
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name Original File Name
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets lock_modality
     *
     * @return int
     */
    public function getLockModality()
    {
        return $this->container['lock_modality'];
    }

    /**
     * Sets lock_modality
     *
     * @param int $lock_modality Possible values:  0: Unblocked  1: Blocked
     *
     * @return $this
     */
    public function setLockModality($lock_modality)
    {
        $this->container['lock_modality'] = $lock_modality;

        return $this;
    }

    /**
     * Gets predefined_profile_id
     *
     * @return int
     */
    public function getPredefinedProfileId()
    {
        return $this->container['predefined_profile_id'];
    }

    /**
     * Sets predefined_profile_id
     *
     * @param int $predefined_profile_id Predefined Profile Identifier
     *
     * @return $this
     */
    public function setPredefinedProfileId($predefined_profile_id)
    {
        $this->container['predefined_profile_id'] = $predefined_profile_id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int $group_id Group Identifier
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string $group_name Model's group name
     *
     * @return $this
     */
    public function setGroupName($group_name)
    {
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param string $extension Extensione File
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets open_after_profilation
     *
     * @return bool
     */
    public function getOpenAfterProfilation()
    {
        return $this->container['open_after_profilation'];
    }

    /**
     * Sets open_after_profilation
     *
     * @param bool $open_after_profilation Open File After to Profiliing
     *
     * @return $this
     */
    public function setOpenAfterProfilation($open_after_profilation)
    {
        $this->container['open_after_profilation'] = $open_after_profilation;

        return $this;
    }

    /**
     * Gets mask_id
     *
     * @return string
     */
    public function getMaskId()
    {
        return $this->container['mask_id'];
    }

    /**
     * Sets mask_id
     *
     * @param string $mask_id Mask Identifier
     *
     * @return $this
     */
    public function setMaskId($mask_id)
    {
        $this->container['mask_id'] = $mask_id;

        return $this;
    }

    /**
     * Gets preview_file_name
     *
     * @return string
     */
    public function getPreviewFileName()
    {
        return $this->container['preview_file_name'];
    }

    /**
     * Sets preview_file_name
     *
     * @param string $preview_file_name File Name of the original preview file
     *
     * @return $this
     */
    public function setPreviewFileName($preview_file_name)
    {
        $this->container['preview_file_name'] = $preview_file_name;

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

