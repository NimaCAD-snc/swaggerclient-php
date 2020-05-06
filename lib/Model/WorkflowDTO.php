<?php
/**
 * WorkflowDTO
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
 * WorkflowDTO Class Doc Comment
 *
 * @category Class
 * @description Class of workflow item
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkflowDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkflowDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'detail' => 'string',
        'name' => 'string',
        'description' => 'string',
        'state' => 'int',
        'organization_chart' => 'int',
        'business_unit' => 'string',
        'color' => 'int',
        'revision' => 'int',
        'workflow_parent_id' => 'int',
        'approval_date' => '\DateTime',
        'creation_date' => '\DateTime',
        'edit_date' => '\DateTime',
        'reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'detail' => null,
        'name' => null,
        'description' => null,
        'state' => 'int32',
        'organization_chart' => 'int32',
        'business_unit' => null,
        'color' => 'int32',
        'revision' => 'int32',
        'workflow_parent_id' => 'int32',
        'approval_date' => 'date-time',
        'creation_date' => 'date-time',
        'edit_date' => 'date-time',
        'reason' => null
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
        'detail' => 'detail',
        'name' => 'name',
        'description' => 'description',
        'state' => 'state',
        'organization_chart' => 'organizationChart',
        'business_unit' => 'businessUnit',
        'color' => 'color',
        'revision' => 'revision',
        'workflow_parent_id' => 'workflowParentId',
        'approval_date' => 'approvalDate',
        'creation_date' => 'creationDate',
        'edit_date' => 'editDate',
        'reason' => 'reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'detail' => 'setDetail',
        'name' => 'setName',
        'description' => 'setDescription',
        'state' => 'setState',
        'organization_chart' => 'setOrganizationChart',
        'business_unit' => 'setBusinessUnit',
        'color' => 'setColor',
        'revision' => 'setRevision',
        'workflow_parent_id' => 'setWorkflowParentId',
        'approval_date' => 'setApprovalDate',
        'creation_date' => 'setCreationDate',
        'edit_date' => 'setEditDate',
        'reason' => 'setReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'detail' => 'getDetail',
        'name' => 'getName',
        'description' => 'getDescription',
        'state' => 'getState',
        'organization_chart' => 'getOrganizationChart',
        'business_unit' => 'getBusinessUnit',
        'color' => 'getColor',
        'revision' => 'getRevision',
        'workflow_parent_id' => 'getWorkflowParentId',
        'approval_date' => 'getApprovalDate',
        'creation_date' => 'getCreationDate',
        'edit_date' => 'getEditDate',
        'reason' => 'getReason'
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
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['organization_chart'] = isset($data['organization_chart']) ? $data['organization_chart'] : null;
        $this->container['business_unit'] = isset($data['business_unit']) ? $data['business_unit'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['workflow_parent_id'] = isset($data['workflow_parent_id']) ? $data['workflow_parent_id'] : null;
        $this->container['approval_date'] = isset($data['approval_date']) ? $data['approval_date'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['edit_date'] = isset($data['edit_date']) ? $data['edit_date'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
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
     * @param int $id Identiifer
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param string $detail Detail
     *
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

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
     * @param int $state Possible values:  0: Deleted  1: Online  2: InEdit  3: Approving
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets organization_chart
     *
     * @return int
     */
    public function getOrganizationChart()
    {
        return $this->container['organization_chart'];
    }

    /**
     * Sets organization_chart
     *
     * @param int $organization_chart Organization chart Identifier
     *
     * @return $this
     */
    public function setOrganizationChart($organization_chart)
    {
        $this->container['organization_chart'] = $organization_chart;

        return $this;
    }

    /**
     * Gets business_unit
     *
     * @return string
     */
    public function getBusinessUnit()
    {
        return $this->container['business_unit'];
    }

    /**
     * Sets business_unit
     *
     * @param string $business_unit Business unit Code
     *
     * @return $this
     */
    public function setBusinessUnit($business_unit)
    {
        $this->container['business_unit'] = $business_unit;

        return $this;
    }

    /**
     * Gets color
     *
     * @return int
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param int $color Color code
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

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
     * @param int $revision Revision Number
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets workflow_parent_id
     *
     * @return int
     */
    public function getWorkflowParentId()
    {
        return $this->container['workflow_parent_id'];
    }

    /**
     * Sets workflow_parent_id
     *
     * @param int $workflow_parent_id Parent Identifier
     *
     * @return $this
     */
    public function setWorkflowParentId($workflow_parent_id)
    {
        $this->container['workflow_parent_id'] = $workflow_parent_id;

        return $this;
    }

    /**
     * Gets approval_date
     *
     * @return \DateTime
     */
    public function getApprovalDate()
    {
        return $this->container['approval_date'];
    }

    /**
     * Sets approval_date
     *
     * @param \DateTime $approval_date Date of Approval
     *
     * @return $this
     */
    public function setApprovalDate($approval_date)
    {
        $this->container['approval_date'] = $approval_date;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param \DateTime $creation_date Creation Date
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets edit_date
     *
     * @return \DateTime
     */
    public function getEditDate()
    {
        return $this->container['edit_date'];
    }

    /**
     * Sets edit_date
     *
     * @param \DateTime $edit_date Last Edit Date
     *
     * @return $this
     */
    public function setEditDate($edit_date)
    {
        $this->container['edit_date'] = $edit_date;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason Reason for the Revision
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

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

