<?php
/**
 * ProcessVariableDTO
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
 * ProcessVariableDTO Class Doc Comment
 *
 * @category Class
 * @description Process Variable information
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProcessVariableDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProcessVariableDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'process_id' => 'int',
        'label' => 'string',
        'value' => 'string',
        'parent_id' => 'int',
        'label_translated_id' => 'int',
        'description_translated_id' => 'int',
        'text_format' => 'int',
        'max_row_number' => 'int',
        'is_limit_to_list' => 'bool',
        'process_variable_format' => 'int',
        'validation_string' => 'string',
        'validation_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'description' => null,
        'process_id' => 'int32',
        'label' => null,
        'value' => null,
        'parent_id' => 'int32',
        'label_translated_id' => 'int32',
        'description_translated_id' => 'int32',
        'text_format' => 'int32',
        'max_row_number' => 'int32',
        'is_limit_to_list' => null,
        'process_variable_format' => 'int32',
        'validation_string' => null,
        'validation_type' => 'int32'
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
        'name' => 'name',
        'description' => 'description',
        'process_id' => 'processId',
        'label' => 'label',
        'value' => 'value',
        'parent_id' => 'parentId',
        'label_translated_id' => 'labelTranslatedId',
        'description_translated_id' => 'descriptionTranslatedId',
        'text_format' => 'textFormat',
        'max_row_number' => 'maxRowNumber',
        'is_limit_to_list' => 'isLimitToList',
        'process_variable_format' => 'processVariableFormat',
        'validation_string' => 'validationString',
        'validation_type' => 'validationType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'process_id' => 'setProcessId',
        'label' => 'setLabel',
        'value' => 'setValue',
        'parent_id' => 'setParentId',
        'label_translated_id' => 'setLabelTranslatedId',
        'description_translated_id' => 'setDescriptionTranslatedId',
        'text_format' => 'setTextFormat',
        'max_row_number' => 'setMaxRowNumber',
        'is_limit_to_list' => 'setIsLimitToList',
        'process_variable_format' => 'setProcessVariableFormat',
        'validation_string' => 'setValidationString',
        'validation_type' => 'setValidationType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'process_id' => 'getProcessId',
        'label' => 'getLabel',
        'value' => 'getValue',
        'parent_id' => 'getParentId',
        'label_translated_id' => 'getLabelTranslatedId',
        'description_translated_id' => 'getDescriptionTranslatedId',
        'text_format' => 'getTextFormat',
        'max_row_number' => 'getMaxRowNumber',
        'is_limit_to_list' => 'getIsLimitToList',
        'process_variable_format' => 'getProcessVariableFormat',
        'validation_string' => 'getValidationString',
        'validation_type' => 'getValidationType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['process_id'] = isset($data['process_id']) ? $data['process_id'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['label_translated_id'] = isset($data['label_translated_id']) ? $data['label_translated_id'] : null;
        $this->container['description_translated_id'] = isset($data['description_translated_id']) ? $data['description_translated_id'] : null;
        $this->container['text_format'] = isset($data['text_format']) ? $data['text_format'] : null;
        $this->container['max_row_number'] = isset($data['max_row_number']) ? $data['max_row_number'] : null;
        $this->container['is_limit_to_list'] = isset($data['is_limit_to_list']) ? $data['is_limit_to_list'] : null;
        $this->container['process_variable_format'] = isset($data['process_variable_format']) ? $data['process_variable_format'] : null;
        $this->container['validation_string'] = isset($data['validation_string']) ? $data['validation_string'] : null;
        $this->container['validation_type'] = isset($data['validation_type']) ? $data['validation_type'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * Gets process_id
     *
     * @return int
     */
    public function getProcessId()
    {
        return $this->container['process_id'];
    }

    /**
     * Sets process_id
     *
     * @param int $process_id Process Identifier
     *
     * @return $this
     */
    public function setProcessId($process_id)
    {
        $this->container['process_id'] = $process_id;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value Value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int $parent_id Parent Matrix Variable Identifier
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets label_translated_id
     *
     * @return int
     */
    public function getLabelTranslatedId()
    {
        return $this->container['label_translated_id'];
    }

    /**
     * Sets label_translated_id
     *
     * @param int $label_translated_id Translated Label Identifier
     *
     * @return $this
     */
    public function setLabelTranslatedId($label_translated_id)
    {
        $this->container['label_translated_id'] = $label_translated_id;

        return $this;
    }

    /**
     * Gets description_translated_id
     *
     * @return int
     */
    public function getDescriptionTranslatedId()
    {
        return $this->container['description_translated_id'];
    }

    /**
     * Sets description_translated_id
     *
     * @param int $description_translated_id Trasnlated description Identifier
     *
     * @return $this
     */
    public function setDescriptionTranslatedId($description_translated_id)
    {
        $this->container['description_translated_id'] = $description_translated_id;

        return $this;
    }

    /**
     * Gets text_format
     *
     * @return int
     */
    public function getTextFormat()
    {
        return $this->container['text_format'];
    }

    /**
     * Sets text_format
     *
     * @param int $text_format Format for visualization
     *
     * @return $this
     */
    public function setTextFormat($text_format)
    {
        $this->container['text_format'] = $text_format;

        return $this;
    }

    /**
     * Gets max_row_number
     *
     * @return int
     */
    public function getMaxRowNumber()
    {
        return $this->container['max_row_number'];
    }

    /**
     * Sets max_row_number
     *
     * @param int $max_row_number Maximun number of row of text
     *
     * @return $this
     */
    public function setMaxRowNumber($max_row_number)
    {
        $this->container['max_row_number'] = $max_row_number;

        return $this;
    }

    /**
     * Gets is_limit_to_list
     *
     * @return bool
     */
    public function getIsLimitToList()
    {
        return $this->container['is_limit_to_list'];
    }

    /**
     * Sets is_limit_to_list
     *
     * @param bool $is_limit_to_list Is limit to list
     *
     * @return $this
     */
    public function setIsLimitToList($is_limit_to_list)
    {
        $this->container['is_limit_to_list'] = $is_limit_to_list;

        return $this;
    }

    /**
     * Gets process_variable_format
     *
     * @return int
     */
    public function getProcessVariableFormat()
    {
        return $this->container['process_variable_format'];
    }

    /**
     * Sets process_variable_format
     *
     * @param int $process_variable_format Possible values:  1: Text  2: Number  3: DateTime  4: Boolean  5: Combo  6: Matrix  7: TextArea  8: TableBox
     *
     * @return $this
     */
    public function setProcessVariableFormat($process_variable_format)
    {
        $this->container['process_variable_format'] = $process_variable_format;

        return $this;
    }

    /**
     * Gets validation_string
     *
     * @return string
     */
    public function getValidationString()
    {
        return $this->container['validation_string'];
    }

    /**
     * Sets validation_string
     *
     * @param string $validation_string The validation string of the variable
     *
     * @return $this
     */
    public function setValidationString($validation_string)
    {
        $this->container['validation_string'] = $validation_string;

        return $this;
    }

    /**
     * Gets validation_type
     *
     * @return int
     */
    public function getValidationType()
    {
        return $this->container['validation_type'];
    }

    /**
     * Sets validation_type
     *
     * @param int $validation_type Possible values:  0: None  1: Regex  2: Formula
     *
     * @return $this
     */
    public function setValidationType($validation_type)
    {
        $this->container['validation_type'] = $validation_type;

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


