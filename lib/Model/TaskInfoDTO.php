<?php
/**
 * TaskInfoDTO
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
 * TaskInfoDTO Class Doc Comment
 *
 * @category Class
 * @description Class of task information
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskInfoDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskInfoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'expire_date' => '\DateTime',
        'take_charge_date' => '\DateTime',
        'system_id' => 'int',
        'revision' => 'int',
        'task_id' => 'int',
        'task_name' => 'string',
        'task_description' => 'string',
        'user_complete_name' => 'string',
        'outcome' => 'string',
        'kind' => 'int',
        'state' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'expire_date' => 'date-time',
        'take_charge_date' => 'date-time',
        'system_id' => 'int32',
        'revision' => 'int32',
        'task_id' => 'int32',
        'task_name' => null,
        'task_description' => null,
        'user_complete_name' => null,
        'outcome' => null,
        'kind' => 'int32',
        'state' => 'int32'
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
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'expire_date' => 'expireDate',
        'take_charge_date' => 'takeChargeDate',
        'system_id' => 'systemId',
        'revision' => 'revision',
        'task_id' => 'taskId',
        'task_name' => 'taskName',
        'task_description' => 'taskDescription',
        'user_complete_name' => 'userCompleteName',
        'outcome' => 'outcome',
        'kind' => 'kind',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'expire_date' => 'setExpireDate',
        'take_charge_date' => 'setTakeChargeDate',
        'system_id' => 'setSystemId',
        'revision' => 'setRevision',
        'task_id' => 'setTaskId',
        'task_name' => 'setTaskName',
        'task_description' => 'setTaskDescription',
        'user_complete_name' => 'setUserCompleteName',
        'outcome' => 'setOutcome',
        'kind' => 'setKind',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'expire_date' => 'getExpireDate',
        'take_charge_date' => 'getTakeChargeDate',
        'system_id' => 'getSystemId',
        'revision' => 'getRevision',
        'task_id' => 'getTaskId',
        'task_name' => 'getTaskName',
        'task_description' => 'getTaskDescription',
        'user_complete_name' => 'getUserCompleteName',
        'outcome' => 'getOutcome',
        'kind' => 'getKind',
        'state' => 'getState'
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
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['expire_date'] = isset($data['expire_date']) ? $data['expire_date'] : null;
        $this->container['take_charge_date'] = isset($data['take_charge_date']) ? $data['take_charge_date'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
        $this->container['task_name'] = isset($data['task_name']) ? $data['task_name'] : null;
        $this->container['task_description'] = isset($data['task_description']) ? $data['task_description'] : null;
        $this->container['user_complete_name'] = isset($data['user_complete_name']) ? $data['user_complete_name'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
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
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Start Date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date End Date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets expire_date
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->container['expire_date'];
    }

    /**
     * Sets expire_date
     *
     * @param \DateTime $expire_date Expiry Date
     *
     * @return $this
     */
    public function setExpireDate($expire_date)
    {
        $this->container['expire_date'] = $expire_date;

        return $this;
    }

    /**
     * Gets take_charge_date
     *
     * @return \DateTime
     */
    public function getTakeChargeDate()
    {
        return $this->container['take_charge_date'];
    }

    /**
     * Sets take_charge_date
     *
     * @param \DateTime $take_charge_date Take Charge Date
     *
     * @return $this
     */
    public function setTakeChargeDate($take_charge_date)
    {
        $this->container['take_charge_date'] = $take_charge_date;

        return $this;
    }

    /**
     * Gets system_id
     *
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     *
     * @param int $system_id Document Identifier
     *
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int $revision Document Revision Number
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets task_id
     *
     * @return int
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param int $task_id Task Identifier
     *
     * @return $this
     */
    public function setTaskId($task_id)
    {
        $this->container['task_id'] = $task_id;

        return $this;
    }

    /**
     * Gets task_name
     *
     * @return string
     */
    public function getTaskName()
    {
        return $this->container['task_name'];
    }

    /**
     * Sets task_name
     *
     * @param string $task_name Task Name
     *
     * @return $this
     */
    public function setTaskName($task_name)
    {
        $this->container['task_name'] = $task_name;

        return $this;
    }

    /**
     * Gets task_description
     *
     * @return string
     */
    public function getTaskDescription()
    {
        return $this->container['task_description'];
    }

    /**
     * Sets task_description
     *
     * @param string $task_description Task Description
     *
     * @return $this
     */
    public function setTaskDescription($task_description)
    {
        $this->container['task_description'] = $task_description;

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
     * Gets outcome
     *
     * @return string
     */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
     * Sets outcome
     *
     * @param string $outcome Task Outcome
     *
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->container['outcome'] = $outcome;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return int
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param int $kind Possible values:  0: Normale  1: Connessione  2: Processo  3: Pause  5: Task5  6: Documentazione  7: Chrono
     *
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

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
     * @param int $state Possible values:  0: Concluso  1: Task_Attivo  2: Non_svolto
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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

