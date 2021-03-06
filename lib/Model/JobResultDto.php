<?php
/**
 * JobResultDto
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
 * JobResultDto Class Doc Comment
 *
 * @category Class
 * @description Oggetto per tenere il risultato della coda
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobResultDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JobResultDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'queue_job' => '\Swagger\Client\Model\QueueJobDto',
        'job_error' => '\Swagger\Client\Model\JobErrorDto',
        'key_value_parameters' => '\Swagger\Client\Model\KeyValueParameterDto[]',
        'is_error' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'queue_job' => null,
        'job_error' => null,
        'key_value_parameters' => null,
        'is_error' => null
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
        'queue_job' => 'queueJob',
        'job_error' => 'jobError',
        'key_value_parameters' => 'keyValueParameters',
        'is_error' => 'isError'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'queue_job' => 'setQueueJob',
        'job_error' => 'setJobError',
        'key_value_parameters' => 'setKeyValueParameters',
        'is_error' => 'setIsError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'queue_job' => 'getQueueJob',
        'job_error' => 'getJobError',
        'key_value_parameters' => 'getKeyValueParameters',
        'is_error' => 'getIsError'
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
        $this->container['queue_job'] = isset($data['queue_job']) ? $data['queue_job'] : null;
        $this->container['job_error'] = isset($data['job_error']) ? $data['job_error'] : null;
        $this->container['key_value_parameters'] = isset($data['key_value_parameters']) ? $data['key_value_parameters'] : null;
        $this->container['is_error'] = isset($data['is_error']) ? $data['is_error'] : null;
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
     * Gets queue_job
     *
     * @return \Swagger\Client\Model\QueueJobDto
     */
    public function getQueueJob()
    {
        return $this->container['queue_job'];
    }

    /**
     * Sets queue_job
     *
     * @param \Swagger\Client\Model\QueueJobDto $queue_job Queue Job
     *
     * @return $this
     */
    public function setQueueJob($queue_job)
    {
        $this->container['queue_job'] = $queue_job;

        return $this;
    }

    /**
     * Gets job_error
     *
     * @return \Swagger\Client\Model\JobErrorDto
     */
    public function getJobError()
    {
        return $this->container['job_error'];
    }

    /**
     * Sets job_error
     *
     * @param \Swagger\Client\Model\JobErrorDto $job_error job_error
     *
     * @return $this
     */
    public function setJobError($job_error)
    {
        $this->container['job_error'] = $job_error;

        return $this;
    }

    /**
     * Gets key_value_parameters
     *
     * @return \Swagger\Client\Model\KeyValueParameterDto[]
     */
    public function getKeyValueParameters()
    {
        return $this->container['key_value_parameters'];
    }

    /**
     * Sets key_value_parameters
     *
     * @param \Swagger\Client\Model\KeyValueParameterDto[] $key_value_parameters key_value_parameters
     *
     * @return $this
     */
    public function setKeyValueParameters($key_value_parameters)
    {
        $this->container['key_value_parameters'] = $key_value_parameters;

        return $this;
    }

    /**
     * Gets is_error
     *
     * @return bool
     */
    public function getIsError()
    {
        return $this->container['is_error'];
    }

    /**
     * Sets is_error
     *
     * @param bool $is_error is_error
     *
     * @return $this
     */
    public function setIsError($is_error)
    {
        $this->container['is_error'] = $is_error;

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


