<?php
/**
 * DocumentWorkInfoDTO
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
 * DocumentWorkInfoDTO Class Doc Comment
 *
 * @category Class
 * @description Class of document of workflow process
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentWorkInfoDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentWorkInfoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'process_doc_id' => 'int',
        'docnumber' => 'int',
        'process_doc_revision' => 'int',
        'state' => 'int',
        'important' => 'bool',
        'process_doc_date' => '\DateTime',
        'current_revision' => 'int',
        'user_complete_name' => 'string',
        'internal_protocol' => 'string',
        'data_doc' => '\DateTime',
        'subject' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'process_doc_id' => 'int32',
        'docnumber' => 'int32',
        'process_doc_revision' => 'int32',
        'state' => 'int32',
        'important' => null,
        'process_doc_date' => 'date-time',
        'current_revision' => 'int32',
        'user_complete_name' => null,
        'internal_protocol' => null,
        'data_doc' => 'date-time',
        'subject' => null
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
        'process_doc_id' => 'processDocId',
        'docnumber' => 'docnumber',
        'process_doc_revision' => 'processDocRevision',
        'state' => 'state',
        'important' => 'important',
        'process_doc_date' => 'processDocDate',
        'current_revision' => 'currentRevision',
        'user_complete_name' => 'userCompleteName',
        'internal_protocol' => 'internalProtocol',
        'data_doc' => 'dataDoc',
        'subject' => 'subject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'process_doc_id' => 'setProcessDocId',
        'docnumber' => 'setDocnumber',
        'process_doc_revision' => 'setProcessDocRevision',
        'state' => 'setState',
        'important' => 'setImportant',
        'process_doc_date' => 'setProcessDocDate',
        'current_revision' => 'setCurrentRevision',
        'user_complete_name' => 'setUserCompleteName',
        'internal_protocol' => 'setInternalProtocol',
        'data_doc' => 'setDataDoc',
        'subject' => 'setSubject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'process_doc_id' => 'getProcessDocId',
        'docnumber' => 'getDocnumber',
        'process_doc_revision' => 'getProcessDocRevision',
        'state' => 'getState',
        'important' => 'getImportant',
        'process_doc_date' => 'getProcessDocDate',
        'current_revision' => 'getCurrentRevision',
        'user_complete_name' => 'getUserCompleteName',
        'internal_protocol' => 'getInternalProtocol',
        'data_doc' => 'getDataDoc',
        'subject' => 'getSubject'
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
        $this->container['process_doc_id'] = isset($data['process_doc_id']) ? $data['process_doc_id'] : null;
        $this->container['docnumber'] = isset($data['docnumber']) ? $data['docnumber'] : null;
        $this->container['process_doc_revision'] = isset($data['process_doc_revision']) ? $data['process_doc_revision'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['important'] = isset($data['important']) ? $data['important'] : null;
        $this->container['process_doc_date'] = isset($data['process_doc_date']) ? $data['process_doc_date'] : null;
        $this->container['current_revision'] = isset($data['current_revision']) ? $data['current_revision'] : null;
        $this->container['user_complete_name'] = isset($data['user_complete_name']) ? $data['user_complete_name'] : null;
        $this->container['internal_protocol'] = isset($data['internal_protocol']) ? $data['internal_protocol'] : null;
        $this->container['data_doc'] = isset($data['data_doc']) ? $data['data_doc'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
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
     * Gets process_doc_id
     *
     * @return int
     */
    public function getProcessDocId()
    {
        return $this->container['process_doc_id'];
    }

    /**
     * Sets process_doc_id
     *
     * @param int $process_doc_id Document Process Identifier
     *
     * @return $this
     */
    public function setProcessDocId($process_doc_id)
    {
        $this->container['process_doc_id'] = $process_doc_id;

        return $this;
    }

    /**
     * Gets docnumber
     *
     * @return int
     */
    public function getDocnumber()
    {
        return $this->container['docnumber'];
    }

    /**
     * Sets docnumber
     *
     * @param int $docnumber Document Identifier
     *
     * @return $this
     */
    public function setDocnumber($docnumber)
    {
        $this->container['docnumber'] = $docnumber;

        return $this;
    }

    /**
     * Gets process_doc_revision
     *
     * @return int
     */
    public function getProcessDocRevision()
    {
        return $this->container['process_doc_revision'];
    }

    /**
     * Sets process_doc_revision
     *
     * @param int $process_doc_revision Document Process Revision
     *
     * @return $this
     */
    public function setProcessDocRevision($process_doc_revision)
    {
        $this->container['process_doc_revision'] = $process_doc_revision;

        return $this;
    }

    /**
     * Gets state
     *
     * @return int
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param int $state Possible values:  0: Secondario  1: Principale
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets important
     *
     * @return bool
     */
    public function getImportant()
    {
        return $this->container['important'];
    }

    /**
     * Sets important
     *
     * @param bool $important Important
     *
     * @return $this
     */
    public function setImportant($important)
    {
        $this->container['important'] = $important;

        return $this;
    }

    /**
     * Gets process_doc_date
     *
     * @return \DateTime
     */
    public function getProcessDocDate()
    {
        return $this->container['process_doc_date'];
    }

    /**
     * Sets process_doc_date
     *
     * @param \DateTime $process_doc_date Creation Date of Document Process
     *
     * @return $this
     */
    public function setProcessDocDate($process_doc_date)
    {
        $this->container['process_doc_date'] = $process_doc_date;

        return $this;
    }

    /**
     * Gets current_revision
     *
     * @return int
     */
    public function getCurrentRevision()
    {
        return $this->container['current_revision'];
    }

    /**
     * Sets current_revision
     *
     * @param int $current_revision Document Revision
     *
     * @return $this
     */
    public function setCurrentRevision($current_revision)
    {
        $this->container['current_revision'] = $current_revision;

        return $this;
    }

    /**
     * Gets user_complete_name
     *
     * @return string
     */
    public function getUserCompleteName()
    {
        return $this->container['user_complete_name'];
    }

    /**
     * Sets user_complete_name
     *
     * @param string $user_complete_name User Description
     *
     * @return $this
     */
    public function setUserCompleteName($user_complete_name)
    {
        $this->container['user_complete_name'] = $user_complete_name;

        return $this;
    }

    /**
     * Gets internal_protocol
     *
     * @return string
     */
    public function getInternalProtocol()
    {
        return $this->container['internal_protocol'];
    }

    /**
     * Sets internal_protocol
     *
     * @param string $internal_protocol Internal Protocol Number
     *
     * @return $this
     */
    public function setInternalProtocol($internal_protocol)
    {
        $this->container['internal_protocol'] = $internal_protocol;

        return $this;
    }

    /**
     * Gets data_doc
     *
     * @return \DateTime
     */
    public function getDataDoc()
    {
        return $this->container['data_doc'];
    }

    /**
     * Sets data_doc
     *
     * @param \DateTime $data_doc Document Date
     *
     * @return $this
     */
    public function setDataDoc($data_doc)
    {
        $this->container['data_doc'] = $data_doc;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Document Subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

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

