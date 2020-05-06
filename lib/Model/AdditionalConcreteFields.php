<?php
/**
 * AdditionalConcreteFields
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
 * AdditionalConcreteFields Class Doc Comment
 *
 * @category Class
 * @description Class of Additional Fields
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdditionalConcreteFields implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdditionalConcreteFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_fields_group' => '\Swagger\Client\Model\AdditionalFieldGroupDTO[]',
        'additional_fields_string' => '\Swagger\Client\Model\AdditionalFieldStringDTO[]',
        'additional_fields_boolean' => '\Swagger\Client\Model\AdditionalFieldBooleanDTO[]',
        'additional_fields_classe' => '\Swagger\Client\Model\AdditionalFieldClasseDTO[]',
        'additional_fields_combo' => '\Swagger\Client\Model\AdditionalFieldComboDTO[]',
        'additional_fields_date_time' => '\Swagger\Client\Model\AdditionalFieldDateTimeDTO[]',
        'additional_fields_multivalue' => '\Swagger\Client\Model\AdditionalFieldMultivalueDTO[]',
        'additional_fields_int' => '\Swagger\Client\Model\AdditionalFieldIntDTO[]',
        'additional_fields_double' => '\Swagger\Client\Model\AdditionalFieldDoubleDTO[]',
        'additional_fields_table' => '\Swagger\Client\Model\AdditionalFieldTableDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_fields_group' => null,
        'additional_fields_string' => null,
        'additional_fields_boolean' => null,
        'additional_fields_classe' => null,
        'additional_fields_combo' => null,
        'additional_fields_date_time' => null,
        'additional_fields_multivalue' => null,
        'additional_fields_int' => null,
        'additional_fields_double' => null,
        'additional_fields_table' => null
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
        'additional_fields_group' => 'additionalFieldsGroup',
        'additional_fields_string' => 'additionalFieldsString',
        'additional_fields_boolean' => 'additionalFieldsBoolean',
        'additional_fields_classe' => 'additionalFieldsClasse',
        'additional_fields_combo' => 'additionalFieldsCombo',
        'additional_fields_date_time' => 'additionalFieldsDateTime',
        'additional_fields_multivalue' => 'additionalFieldsMultivalue',
        'additional_fields_int' => 'additionalFieldsInt',
        'additional_fields_double' => 'additionalFieldsDouble',
        'additional_fields_table' => 'additionalFieldsTable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_fields_group' => 'setAdditionalFieldsGroup',
        'additional_fields_string' => 'setAdditionalFieldsString',
        'additional_fields_boolean' => 'setAdditionalFieldsBoolean',
        'additional_fields_classe' => 'setAdditionalFieldsClasse',
        'additional_fields_combo' => 'setAdditionalFieldsCombo',
        'additional_fields_date_time' => 'setAdditionalFieldsDateTime',
        'additional_fields_multivalue' => 'setAdditionalFieldsMultivalue',
        'additional_fields_int' => 'setAdditionalFieldsInt',
        'additional_fields_double' => 'setAdditionalFieldsDouble',
        'additional_fields_table' => 'setAdditionalFieldsTable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_fields_group' => 'getAdditionalFieldsGroup',
        'additional_fields_string' => 'getAdditionalFieldsString',
        'additional_fields_boolean' => 'getAdditionalFieldsBoolean',
        'additional_fields_classe' => 'getAdditionalFieldsClasse',
        'additional_fields_combo' => 'getAdditionalFieldsCombo',
        'additional_fields_date_time' => 'getAdditionalFieldsDateTime',
        'additional_fields_multivalue' => 'getAdditionalFieldsMultivalue',
        'additional_fields_int' => 'getAdditionalFieldsInt',
        'additional_fields_double' => 'getAdditionalFieldsDouble',
        'additional_fields_table' => 'getAdditionalFieldsTable'
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
        $this->container['additional_fields_group'] = isset($data['additional_fields_group']) ? $data['additional_fields_group'] : null;
        $this->container['additional_fields_string'] = isset($data['additional_fields_string']) ? $data['additional_fields_string'] : null;
        $this->container['additional_fields_boolean'] = isset($data['additional_fields_boolean']) ? $data['additional_fields_boolean'] : null;
        $this->container['additional_fields_classe'] = isset($data['additional_fields_classe']) ? $data['additional_fields_classe'] : null;
        $this->container['additional_fields_combo'] = isset($data['additional_fields_combo']) ? $data['additional_fields_combo'] : null;
        $this->container['additional_fields_date_time'] = isset($data['additional_fields_date_time']) ? $data['additional_fields_date_time'] : null;
        $this->container['additional_fields_multivalue'] = isset($data['additional_fields_multivalue']) ? $data['additional_fields_multivalue'] : null;
        $this->container['additional_fields_int'] = isset($data['additional_fields_int']) ? $data['additional_fields_int'] : null;
        $this->container['additional_fields_double'] = isset($data['additional_fields_double']) ? $data['additional_fields_double'] : null;
        $this->container['additional_fields_table'] = isset($data['additional_fields_table']) ? $data['additional_fields_table'] : null;
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
     * Gets additional_fields_group
     *
     * @return \Swagger\Client\Model\AdditionalFieldGroupDTO[]
     */
    public function getAdditionalFieldsGroup()
    {
        return $this->container['additional_fields_group'];
    }

    /**
     * Sets additional_fields_group
     *
     * @param \Swagger\Client\Model\AdditionalFieldGroupDTO[] $additional_fields_group Additional fields of Group type
     *
     * @return $this
     */
    public function setAdditionalFieldsGroup($additional_fields_group)
    {
        $this->container['additional_fields_group'] = $additional_fields_group;

        return $this;
    }

    /**
     * Gets additional_fields_string
     *
     * @return \Swagger\Client\Model\AdditionalFieldStringDTO[]
     */
    public function getAdditionalFieldsString()
    {
        return $this->container['additional_fields_string'];
    }

    /**
     * Sets additional_fields_string
     *
     * @param \Swagger\Client\Model\AdditionalFieldStringDTO[] $additional_fields_string Additional fields of Text type
     *
     * @return $this
     */
    public function setAdditionalFieldsString($additional_fields_string)
    {
        $this->container['additional_fields_string'] = $additional_fields_string;

        return $this;
    }

    /**
     * Gets additional_fields_boolean
     *
     * @return \Swagger\Client\Model\AdditionalFieldBooleanDTO[]
     */
    public function getAdditionalFieldsBoolean()
    {
        return $this->container['additional_fields_boolean'];
    }

    /**
     * Sets additional_fields_boolean
     *
     * @param \Swagger\Client\Model\AdditionalFieldBooleanDTO[] $additional_fields_boolean Additional fields of Boolean type
     *
     * @return $this
     */
    public function setAdditionalFieldsBoolean($additional_fields_boolean)
    {
        $this->container['additional_fields_boolean'] = $additional_fields_boolean;

        return $this;
    }

    /**
     * Gets additional_fields_classe
     *
     * @return \Swagger\Client\Model\AdditionalFieldClasseDTO[]
     */
    public function getAdditionalFieldsClasse()
    {
        return $this->container['additional_fields_classe'];
    }

    /**
     * Sets additional_fields_classe
     *
     * @param \Swagger\Client\Model\AdditionalFieldClasseDTO[] $additional_fields_classe Additional fields of Matrix type
     *
     * @return $this
     */
    public function setAdditionalFieldsClasse($additional_fields_classe)
    {
        $this->container['additional_fields_classe'] = $additional_fields_classe;

        return $this;
    }

    /**
     * Gets additional_fields_combo
     *
     * @return \Swagger\Client\Model\AdditionalFieldComboDTO[]
     */
    public function getAdditionalFieldsCombo()
    {
        return $this->container['additional_fields_combo'];
    }

    /**
     * Sets additional_fields_combo
     *
     * @param \Swagger\Client\Model\AdditionalFieldComboDTO[] $additional_fields_combo Additional fields of Combo List type
     *
     * @return $this
     */
    public function setAdditionalFieldsCombo($additional_fields_combo)
    {
        $this->container['additional_fields_combo'] = $additional_fields_combo;

        return $this;
    }

    /**
     * Gets additional_fields_date_time
     *
     * @return \Swagger\Client\Model\AdditionalFieldDateTimeDTO[]
     */
    public function getAdditionalFieldsDateTime()
    {
        return $this->container['additional_fields_date_time'];
    }

    /**
     * Sets additional_fields_date_time
     *
     * @param \Swagger\Client\Model\AdditionalFieldDateTimeDTO[] $additional_fields_date_time Additional fields of Datatime type
     *
     * @return $this
     */
    public function setAdditionalFieldsDateTime($additional_fields_date_time)
    {
        $this->container['additional_fields_date_time'] = $additional_fields_date_time;

        return $this;
    }

    /**
     * Gets additional_fields_multivalue
     *
     * @return \Swagger\Client\Model\AdditionalFieldMultivalueDTO[]
     */
    public function getAdditionalFieldsMultivalue()
    {
        return $this->container['additional_fields_multivalue'];
    }

    /**
     * Sets additional_fields_multivalue
     *
     * @param \Swagger\Client\Model\AdditionalFieldMultivalueDTO[] $additional_fields_multivalue Additional fields of Multivalues type
     *
     * @return $this
     */
    public function setAdditionalFieldsMultivalue($additional_fields_multivalue)
    {
        $this->container['additional_fields_multivalue'] = $additional_fields_multivalue;

        return $this;
    }

    /**
     * Gets additional_fields_int
     *
     * @return \Swagger\Client\Model\AdditionalFieldIntDTO[]
     */
    public function getAdditionalFieldsInt()
    {
        return $this->container['additional_fields_int'];
    }

    /**
     * Sets additional_fields_int
     *
     * @param \Swagger\Client\Model\AdditionalFieldIntDTO[] $additional_fields_int Additional fields of Numeric type
     *
     * @return $this
     */
    public function setAdditionalFieldsInt($additional_fields_int)
    {
        $this->container['additional_fields_int'] = $additional_fields_int;

        return $this;
    }

    /**
     * Gets additional_fields_double
     *
     * @return \Swagger\Client\Model\AdditionalFieldDoubleDTO[]
     */
    public function getAdditionalFieldsDouble()
    {
        return $this->container['additional_fields_double'];
    }

    /**
     * Sets additional_fields_double
     *
     * @param \Swagger\Client\Model\AdditionalFieldDoubleDTO[] $additional_fields_double Additional fields of Decimal type
     *
     * @return $this
     */
    public function setAdditionalFieldsDouble($additional_fields_double)
    {
        $this->container['additional_fields_double'] = $additional_fields_double;

        return $this;
    }

    /**
     * Gets additional_fields_table
     *
     * @return \Swagger\Client\Model\AdditionalFieldTableDTO[]
     */
    public function getAdditionalFieldsTable()
    {
        return $this->container['additional_fields_table'];
    }

    /**
     * Sets additional_fields_table
     *
     * @param \Swagger\Client\Model\AdditionalFieldTableDTO[] $additional_fields_table Additional fields of Table type
     *
     * @return $this
     */
    public function setAdditionalFieldsTable($additional_fields_table)
    {
        $this->container['additional_fields_table'] = $additional_fields_table;

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

