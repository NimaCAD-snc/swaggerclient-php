<?php
/**
 * IxCeDocumentDTO
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
 * IxCeDocumentDTO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IxCeDocumentDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IxCeDocumentDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'attachment_id' => 'int',
        'note_id' => 'int',
        'father_id' => 'int',
        'ixce_id' => 'string',
        'vat_number' => 'string',
        'document_type_system_id' => 'int',
        'document_type_description' => 'string',
        'docnumber' => 'int',
        'revision' => 'int',
        'creation_date' => '\DateTime',
        'status' => 'int',
        'insertion_hash' => 'string',
        'receive_hash' => 'string',
        'accumulation_package_id' => 'int',
        'accumulation_package_description' => 'string',
        'modified' => 'bool',
        'last_update' => '\DateTime',
        'description' => 'string',
        'user_id' => 'int',
        'user_description' => 'string',
        'service_type' => 'int',
        'ix_document_id' => 'int',
        'ixce_index' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'attachment_id' => 'int32',
        'note_id' => 'int32',
        'father_id' => 'int32',
        'ixce_id' => null,
        'vat_number' => null,
        'document_type_system_id' => 'int32',
        'document_type_description' => null,
        'docnumber' => 'int32',
        'revision' => 'int32',
        'creation_date' => 'date-time',
        'status' => 'int32',
        'insertion_hash' => null,
        'receive_hash' => null,
        'accumulation_package_id' => 'int32',
        'accumulation_package_description' => null,
        'modified' => null,
        'last_update' => 'date-time',
        'description' => null,
        'user_id' => 'int32',
        'user_description' => null,
        'service_type' => 'int32',
        'ix_document_id' => 'int32',
        'ixce_index' => 'int32'
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
        'attachment_id' => 'attachmentId',
        'note_id' => 'noteId',
        'father_id' => 'fatherId',
        'ixce_id' => 'ixceId',
        'vat_number' => 'vatNumber',
        'document_type_system_id' => 'documentTypeSystemId',
        'document_type_description' => 'documentTypeDescription',
        'docnumber' => 'docnumber',
        'revision' => 'revision',
        'creation_date' => 'creationDate',
        'status' => 'status',
        'insertion_hash' => 'insertionHash',
        'receive_hash' => 'receiveHash',
        'accumulation_package_id' => 'accumulationPackageId',
        'accumulation_package_description' => 'accumulationPackageDescription',
        'modified' => 'modified',
        'last_update' => 'lastUpdate',
        'description' => 'description',
        'user_id' => 'userId',
        'user_description' => 'userDescription',
        'service_type' => 'serviceType',
        'ix_document_id' => 'ixDocumentId',
        'ixce_index' => 'ixceIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'attachment_id' => 'setAttachmentId',
        'note_id' => 'setNoteId',
        'father_id' => 'setFatherId',
        'ixce_id' => 'setIxceId',
        'vat_number' => 'setVatNumber',
        'document_type_system_id' => 'setDocumentTypeSystemId',
        'document_type_description' => 'setDocumentTypeDescription',
        'docnumber' => 'setDocnumber',
        'revision' => 'setRevision',
        'creation_date' => 'setCreationDate',
        'status' => 'setStatus',
        'insertion_hash' => 'setInsertionHash',
        'receive_hash' => 'setReceiveHash',
        'accumulation_package_id' => 'setAccumulationPackageId',
        'accumulation_package_description' => 'setAccumulationPackageDescription',
        'modified' => 'setModified',
        'last_update' => 'setLastUpdate',
        'description' => 'setDescription',
        'user_id' => 'setUserId',
        'user_description' => 'setUserDescription',
        'service_type' => 'setServiceType',
        'ix_document_id' => 'setIxDocumentId',
        'ixce_index' => 'setIxceIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'attachment_id' => 'getAttachmentId',
        'note_id' => 'getNoteId',
        'father_id' => 'getFatherId',
        'ixce_id' => 'getIxceId',
        'vat_number' => 'getVatNumber',
        'document_type_system_id' => 'getDocumentTypeSystemId',
        'document_type_description' => 'getDocumentTypeDescription',
        'docnumber' => 'getDocnumber',
        'revision' => 'getRevision',
        'creation_date' => 'getCreationDate',
        'status' => 'getStatus',
        'insertion_hash' => 'getInsertionHash',
        'receive_hash' => 'getReceiveHash',
        'accumulation_package_id' => 'getAccumulationPackageId',
        'accumulation_package_description' => 'getAccumulationPackageDescription',
        'modified' => 'getModified',
        'last_update' => 'getLastUpdate',
        'description' => 'getDescription',
        'user_id' => 'getUserId',
        'user_description' => 'getUserDescription',
        'service_type' => 'getServiceType',
        'ix_document_id' => 'getIxDocumentId',
        'ixce_index' => 'getIxceIndex'
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
        $this->container['attachment_id'] = isset($data['attachment_id']) ? $data['attachment_id'] : null;
        $this->container['note_id'] = isset($data['note_id']) ? $data['note_id'] : null;
        $this->container['father_id'] = isset($data['father_id']) ? $data['father_id'] : null;
        $this->container['ixce_id'] = isset($data['ixce_id']) ? $data['ixce_id'] : null;
        $this->container['vat_number'] = isset($data['vat_number']) ? $data['vat_number'] : null;
        $this->container['document_type_system_id'] = isset($data['document_type_system_id']) ? $data['document_type_system_id'] : null;
        $this->container['document_type_description'] = isset($data['document_type_description']) ? $data['document_type_description'] : null;
        $this->container['docnumber'] = isset($data['docnumber']) ? $data['docnumber'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['insertion_hash'] = isset($data['insertion_hash']) ? $data['insertion_hash'] : null;
        $this->container['receive_hash'] = isset($data['receive_hash']) ? $data['receive_hash'] : null;
        $this->container['accumulation_package_id'] = isset($data['accumulation_package_id']) ? $data['accumulation_package_id'] : null;
        $this->container['accumulation_package_description'] = isset($data['accumulation_package_description']) ? $data['accumulation_package_description'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['last_update'] = isset($data['last_update']) ? $data['last_update'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_description'] = isset($data['user_description']) ? $data['user_description'] : null;
        $this->container['service_type'] = isset($data['service_type']) ? $data['service_type'] : null;
        $this->container['ix_document_id'] = isset($data['ix_document_id']) ? $data['ix_document_id'] : null;
        $this->container['ixce_index'] = isset($data['ixce_index']) ? $data['ixce_index'] : null;
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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets attachment_id
     *
     * @return int
     */
    public function getAttachmentId()
    {
        return $this->container['attachment_id'];
    }

    /**
     * Sets attachment_id
     *
     * @param int $attachment_id attachment_id
     *
     * @return $this
     */
    public function setAttachmentId($attachment_id)
    {
        $this->container['attachment_id'] = $attachment_id;

        return $this;
    }

    /**
     * Gets note_id
     *
     * @return int
     */
    public function getNoteId()
    {
        return $this->container['note_id'];
    }

    /**
     * Sets note_id
     *
     * @param int $note_id note_id
     *
     * @return $this
     */
    public function setNoteId($note_id)
    {
        $this->container['note_id'] = $note_id;

        return $this;
    }

    /**
     * Gets father_id
     *
     * @return int
     */
    public function getFatherId()
    {
        return $this->container['father_id'];
    }

    /**
     * Sets father_id
     *
     * @param int $father_id father_id
     *
     * @return $this
     */
    public function setFatherId($father_id)
    {
        $this->container['father_id'] = $father_id;

        return $this;
    }

    /**
     * Gets ixce_id
     *
     * @return string
     */
    public function getIxceId()
    {
        return $this->container['ixce_id'];
    }

    /**
     * Sets ixce_id
     *
     * @param string $ixce_id ixce_id
     *
     * @return $this
     */
    public function setIxceId($ixce_id)
    {
        $this->container['ixce_id'] = $ixce_id;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string $vat_number vat_number
     *
     * @return $this
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets document_type_system_id
     *
     * @return int
     */
    public function getDocumentTypeSystemId()
    {
        return $this->container['document_type_system_id'];
    }

    /**
     * Sets document_type_system_id
     *
     * @param int $document_type_system_id document_type_system_id
     *
     * @return $this
     */
    public function setDocumentTypeSystemId($document_type_system_id)
    {
        $this->container['document_type_system_id'] = $document_type_system_id;

        return $this;
    }

    /**
     * Gets document_type_description
     *
     * @return string
     */
    public function getDocumentTypeDescription()
    {
        return $this->container['document_type_description'];
    }

    /**
     * Sets document_type_description
     *
     * @param string $document_type_description document_type_description
     *
     * @return $this
     */
    public function setDocumentTypeDescription($document_type_description)
    {
        $this->container['document_type_description'] = $document_type_description;

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
     * @param int $docnumber docnumber
     *
     * @return $this
     */
    public function setDocnumber($docnumber)
    {
        $this->container['docnumber'] = $docnumber;

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
     * @param int $revision revision
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

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
     * @param \DateTime $creation_date creation_date
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status Possible values:  0: Error  1: Inserted  2: ConnectorTakeCharge  3: ConnectorError  4: TakeChargeError  5: IxceTakeCharge  6: ToValidate  7: Validated  8: InError  9: Discarded  10: Preserved
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets insertion_hash
     *
     * @return string
     */
    public function getInsertionHash()
    {
        return $this->container['insertion_hash'];
    }

    /**
     * Sets insertion_hash
     *
     * @param string $insertion_hash insertion_hash
     *
     * @return $this
     */
    public function setInsertionHash($insertion_hash)
    {
        $this->container['insertion_hash'] = $insertion_hash;

        return $this;
    }

    /**
     * Gets receive_hash
     *
     * @return string
     */
    public function getReceiveHash()
    {
        return $this->container['receive_hash'];
    }

    /**
     * Sets receive_hash
     *
     * @param string $receive_hash receive_hash
     *
     * @return $this
     */
    public function setReceiveHash($receive_hash)
    {
        $this->container['receive_hash'] = $receive_hash;

        return $this;
    }

    /**
     * Gets accumulation_package_id
     *
     * @return int
     */
    public function getAccumulationPackageId()
    {
        return $this->container['accumulation_package_id'];
    }

    /**
     * Sets accumulation_package_id
     *
     * @param int $accumulation_package_id accumulation_package_id
     *
     * @return $this
     */
    public function setAccumulationPackageId($accumulation_package_id)
    {
        $this->container['accumulation_package_id'] = $accumulation_package_id;

        return $this;
    }

    /**
     * Gets accumulation_package_description
     *
     * @return string
     */
    public function getAccumulationPackageDescription()
    {
        return $this->container['accumulation_package_description'];
    }

    /**
     * Sets accumulation_package_description
     *
     * @param string $accumulation_package_description accumulation_package_description
     *
     * @return $this
     */
    public function setAccumulationPackageDescription($accumulation_package_description)
    {
        $this->container['accumulation_package_description'] = $accumulation_package_description;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return bool
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param bool $modified modified
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param \DateTime $last_update last_update
     *
     * @return $this
     */
    public function setLastUpdate($last_update)
    {
        $this->container['last_update'] = $last_update;

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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
     * @param string $user_description user_description
     *
     * @return $this
     */
    public function setUserDescription($user_description)
    {
        $this->container['user_description'] = $user_description;

        return $this;
    }

    /**
     * Gets service_type
     *
     * @return int
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     *
     * @param int $service_type Possible values:  0: IX  1: IXCE  2: IXCE_V2  3: IX_V2
     *
     * @return $this
     */
    public function setServiceType($service_type)
    {
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets ix_document_id
     *
     * @return int
     */
    public function getIxDocumentId()
    {
        return $this->container['ix_document_id'];
    }

    /**
     * Sets ix_document_id
     *
     * @param int $ix_document_id ix_document_id
     *
     * @return $this
     */
    public function setIxDocumentId($ix_document_id)
    {
        $this->container['ix_document_id'] = $ix_document_id;

        return $this;
    }

    /**
     * Gets ixce_index
     *
     * @return int
     */
    public function getIxceIndex()
    {
        return $this->container['ixce_index'];
    }

    /**
     * Sets ixce_index
     *
     * @param int $ixce_index ixce_index
     *
     * @return $this
     */
    public function setIxceIndex($ixce_index)
    {
        $this->container['ixce_index'] = $ixce_index;

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


