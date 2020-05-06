<?php
/**
 * MaskProfileSchemaDTO
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
 * MaskProfileSchemaDTO Class Doc Comment
 *
 * @category Class
 * @description Class of profiling mask schema
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MaskProfileSchemaDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MaskProfileSchemaDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mask_id' => 'string',
        'predefined_profile_id' => 'int',
        'options' => '\Swagger\Client\Model\ProfileMaskOptionsDTO',
        'behaviour' => '\Swagger\Client\Model\ProfileMaskBehaviourDTO',
        'mask_type' => 'int',
        'id' => 'int',
        'document' => '\Swagger\Client\Model\FileDTO',
        'fields' => '\Swagger\Client\Model\FieldBaseDTO[]',
        'post_profilation_actions' => '\Swagger\Client\Model\PostProfilationActionDTO[]',
        'constrain_role_behaviour' => 'int',
        'attachments' => 'string[]',
        'notes' => '\Swagger\Client\Model\NoteDTO[]',
        'pa_notes' => 'string[]',
        'authority_data' => '\Swagger\Client\Model\AuthorityDataDTO',
        'generate_pa_protocol' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mask_id' => null,
        'predefined_profile_id' => 'int32',
        'options' => null,
        'behaviour' => null,
        'mask_type' => 'int32',
        'id' => 'int32',
        'document' => null,
        'fields' => null,
        'post_profilation_actions' => null,
        'constrain_role_behaviour' => 'int32',
        'attachments' => null,
        'notes' => null,
        'pa_notes' => null,
        'authority_data' => null,
        'generate_pa_protocol' => null
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
        'mask_id' => 'maskId',
        'predefined_profile_id' => 'predefinedProfileId',
        'options' => 'options',
        'behaviour' => 'behaviour',
        'mask_type' => 'maskType',
        'id' => 'id',
        'document' => 'document',
        'fields' => 'fields',
        'post_profilation_actions' => 'postProfilationActions',
        'constrain_role_behaviour' => 'constrainRoleBehaviour',
        'attachments' => 'attachments',
        'notes' => 'notes',
        'pa_notes' => 'paNotes',
        'authority_data' => 'authorityData',
        'generate_pa_protocol' => 'generatePaProtocol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mask_id' => 'setMaskId',
        'predefined_profile_id' => 'setPredefinedProfileId',
        'options' => 'setOptions',
        'behaviour' => 'setBehaviour',
        'mask_type' => 'setMaskType',
        'id' => 'setId',
        'document' => 'setDocument',
        'fields' => 'setFields',
        'post_profilation_actions' => 'setPostProfilationActions',
        'constrain_role_behaviour' => 'setConstrainRoleBehaviour',
        'attachments' => 'setAttachments',
        'notes' => 'setNotes',
        'pa_notes' => 'setPaNotes',
        'authority_data' => 'setAuthorityData',
        'generate_pa_protocol' => 'setGeneratePaProtocol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mask_id' => 'getMaskId',
        'predefined_profile_id' => 'getPredefinedProfileId',
        'options' => 'getOptions',
        'behaviour' => 'getBehaviour',
        'mask_type' => 'getMaskType',
        'id' => 'getId',
        'document' => 'getDocument',
        'fields' => 'getFields',
        'post_profilation_actions' => 'getPostProfilationActions',
        'constrain_role_behaviour' => 'getConstrainRoleBehaviour',
        'attachments' => 'getAttachments',
        'notes' => 'getNotes',
        'pa_notes' => 'getPaNotes',
        'authority_data' => 'getAuthorityData',
        'generate_pa_protocol' => 'getGeneratePaProtocol'
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
        $this->container['mask_id'] = isset($data['mask_id']) ? $data['mask_id'] : null;
        $this->container['predefined_profile_id'] = isset($data['predefined_profile_id']) ? $data['predefined_profile_id'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['behaviour'] = isset($data['behaviour']) ? $data['behaviour'] : null;
        $this->container['mask_type'] = isset($data['mask_type']) ? $data['mask_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['document'] = isset($data['document']) ? $data['document'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['post_profilation_actions'] = isset($data['post_profilation_actions']) ? $data['post_profilation_actions'] : null;
        $this->container['constrain_role_behaviour'] = isset($data['constrain_role_behaviour']) ? $data['constrain_role_behaviour'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['pa_notes'] = isset($data['pa_notes']) ? $data['pa_notes'] : null;
        $this->container['authority_data'] = isset($data['authority_data']) ? $data['authority_data'] : null;
        $this->container['generate_pa_protocol'] = isset($data['generate_pa_protocol']) ? $data['generate_pa_protocol'] : null;
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
     * Gets options
     *
     * @return \Swagger\Client\Model\ProfileMaskOptionsDTO
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Swagger\Client\Model\ProfileMaskOptionsDTO $options Options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets behaviour
     *
     * @return \Swagger\Client\Model\ProfileMaskBehaviourDTO
     */
    public function getBehaviour()
    {
        return $this->container['behaviour'];
    }

    /**
     * Sets behaviour
     *
     * @param \Swagger\Client\Model\ProfileMaskBehaviourDTO $behaviour Behaviour
     *
     * @return $this
     */
    public function setBehaviour($behaviour)
    {
        $this->container['behaviour'] = $behaviour;

        return $this;
    }

    /**
     * Gets mask_type
     *
     * @return int
     */
    public function getMaskType()
    {
        return $this->container['mask_type'];
    }

    /**
     * Sets mask_type
     *
     * @param int $mask_type Possible values:  0: Nothing  1: Barcode  2: Archiviazione
     *
     * @return $this
     */
    public function setMaskType($mask_type)
    {
        $this->container['mask_type'] = $mask_type;

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
     * Gets document
     *
     * @return \Swagger\Client\Model\FileDTO
     */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
     * Sets document
     *
     * @param \Swagger\Client\Model\FileDTO $document File data
     *
     * @return $this
     */
    public function setDocument($document)
    {
        $this->container['document'] = $document;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \Swagger\Client\Model\FieldBaseDTO[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \Swagger\Client\Model\FieldBaseDTO[] $fields Fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets post_profilation_actions
     *
     * @return \Swagger\Client\Model\PostProfilationActionDTO[]
     */
    public function getPostProfilationActions()
    {
        return $this->container['post_profilation_actions'];
    }

    /**
     * Sets post_profilation_actions
     *
     * @param \Swagger\Client\Model\PostProfilationActionDTO[] $post_profilation_actions Post Profilation Actions
     *
     * @return $this
     */
    public function setPostProfilationActions($post_profilation_actions)
    {
        $this->container['post_profilation_actions'] = $post_profilation_actions;

        return $this;
    }

    /**
     * Gets constrain_role_behaviour
     *
     * @return int
     */
    public function getConstrainRoleBehaviour()
    {
        return $this->container['constrain_role_behaviour'];
    }

    /**
     * Sets constrain_role_behaviour
     *
     * @param int $constrain_role_behaviour Possible values:  0: None  1: ForceInsert  2: State
     *
     * @return $this
     */
    public function setConstrainRoleBehaviour($constrain_role_behaviour)
    {
        $this->container['constrain_role_behaviour'] = $constrain_role_behaviour;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return string[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param string[] $attachments Attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \Swagger\Client\Model\NoteDTO[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \Swagger\Client\Model\NoteDTO[] $notes Notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets pa_notes
     *
     * @return string[]
     */
    public function getPaNotes()
    {
        return $this->container['pa_notes'];
    }

    /**
     * Sets pa_notes
     *
     * @param string[] $pa_notes Public Amministration Notes
     *
     * @return $this
     */
    public function setPaNotes($pa_notes)
    {
        $this->container['pa_notes'] = $pa_notes;

        return $this;
    }

    /**
     * Gets authority_data
     *
     * @return \Swagger\Client\Model\AuthorityDataDTO
     */
    public function getAuthorityData()
    {
        return $this->container['authority_data'];
    }

    /**
     * Sets authority_data
     *
     * @param \Swagger\Client\Model\AuthorityDataDTO $authority_data Authority Data
     *
     * @return $this
     */
    public function setAuthorityData($authority_data)
    {
        $this->container['authority_data'] = $authority_data;

        return $this;
    }

    /**
     * Gets generate_pa_protocol
     *
     * @return bool
     */
    public function getGeneratePaProtocol()
    {
        return $this->container['generate_pa_protocol'];
    }

    /**
     * Sets generate_pa_protocol
     *
     * @param bool $generate_pa_protocol Defines if a protocol has been generated
     *
     * @return $this
     */
    public function setGeneratePaProtocol($generate_pa_protocol)
    {
        $this->container['generate_pa_protocol'] = $generate_pa_protocol;

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


