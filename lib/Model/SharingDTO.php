<?php
/**
 * SharingDTO
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
 * SharingDTO Class Doc Comment
 *
 * @category Class
 * @description Object that define a sharing
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SharingDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SharingDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sharing_id' => 'string',
        'user_id' => 'int',
        'creation_date' => '\DateTime',
        'html_for_access' => '\Swagger\Client\Model\SharingHtmlDTO[]',
        'html_for_expiration' => '\Swagger\Client\Model\SharingHtmlDTO[]',
        'url_for_receivers' => '\Swagger\Client\Model\SharingReceiverUriDTO[]',
        'sharing_definition_id' => 'string',
        'document_type_id' => 'int',
        'beginning' => 'int',
        'expiration' => 'int',
        'after_send' => 'int',
        'repeat_send_mail' => 'bool',
        'repeat_send_mail_time' => 'int',
        'repeat_send_mail_number' => 'int',
        'workflow_after_read' => 'int',
        'workflow_after_expiration' => 'int',
        'workflow_after_expiration_not_read' => 'int',
        'alert_for_no_read' => 'bool',
        'alert_for_no_read_time' => 'int',
        'disable_after_read' => 'bool',
        'delete_after_expiration' => 'bool',
        'immediatly_send' => 'bool',
        'send_time' => '\DateTime',
        'max_download_time' => 'int',
        'details_as_zip' => 'bool',
        'default_language' => 'string',
        'download_directly' => 'bool',
        'sharing_mode' => 'int',
        'mail_definitions' => '\Swagger\Client\Model\SharingMailDTO[]',
        'share_name' => 'string',
        'share_description' => 'string',
        'is_enable' => 'bool',
        'virtual' => 'bool',
        'sharing_receivers' => '\Swagger\Client\Model\SharingReceiverDTO[]',
        'sharing_details' => '\Swagger\Client\Model\SharingDetailDTO[]',
        'external_data' => '\Swagger\Client\Model\KeyValueDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sharing_id' => null,
        'user_id' => 'int32',
        'creation_date' => 'date-time',
        'html_for_access' => null,
        'html_for_expiration' => null,
        'url_for_receivers' => null,
        'sharing_definition_id' => null,
        'document_type_id' => 'int32',
        'beginning' => 'int32',
        'expiration' => 'int32',
        'after_send' => 'int32',
        'repeat_send_mail' => null,
        'repeat_send_mail_time' => 'int32',
        'repeat_send_mail_number' => 'int32',
        'workflow_after_read' => 'int32',
        'workflow_after_expiration' => 'int32',
        'workflow_after_expiration_not_read' => 'int32',
        'alert_for_no_read' => null,
        'alert_for_no_read_time' => 'int32',
        'disable_after_read' => null,
        'delete_after_expiration' => null,
        'immediatly_send' => null,
        'send_time' => 'date-time',
        'max_download_time' => 'int32',
        'details_as_zip' => null,
        'default_language' => null,
        'download_directly' => null,
        'sharing_mode' => 'int32',
        'mail_definitions' => null,
        'share_name' => null,
        'share_description' => null,
        'is_enable' => null,
        'virtual' => null,
        'sharing_receivers' => null,
        'sharing_details' => null,
        'external_data' => null
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
        'sharing_id' => 'sharingId',
        'user_id' => 'userId',
        'creation_date' => 'creationDate',
        'html_for_access' => 'htmlForAccess',
        'html_for_expiration' => 'htmlForExpiration',
        'url_for_receivers' => 'urlForReceivers',
        'sharing_definition_id' => 'sharingDefinitionId',
        'document_type_id' => 'documentTypeId',
        'beginning' => 'beginning',
        'expiration' => 'expiration',
        'after_send' => 'afterSend',
        'repeat_send_mail' => 'repeatSendMail',
        'repeat_send_mail_time' => 'repeatSendMailTime',
        'repeat_send_mail_number' => 'repeatSendMailNumber',
        'workflow_after_read' => 'workflowAfterRead',
        'workflow_after_expiration' => 'workflowAfterExpiration',
        'workflow_after_expiration_not_read' => 'workflowAfterExpirationNotRead',
        'alert_for_no_read' => 'alertForNoRead',
        'alert_for_no_read_time' => 'alertForNoReadTime',
        'disable_after_read' => 'disableAfterRead',
        'delete_after_expiration' => 'deleteAfterExpiration',
        'immediatly_send' => 'immediatlySend',
        'send_time' => 'sendTime',
        'max_download_time' => 'maxDownloadTime',
        'details_as_zip' => 'detailsAsZip',
        'default_language' => 'defaultLanguage',
        'download_directly' => 'downloadDirectly',
        'sharing_mode' => 'sharingMode',
        'mail_definitions' => 'mailDefinitions',
        'share_name' => 'shareName',
        'share_description' => 'shareDescription',
        'is_enable' => 'isEnable',
        'virtual' => 'virtual',
        'sharing_receivers' => 'sharingReceivers',
        'sharing_details' => 'sharingDetails',
        'external_data' => 'externalData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sharing_id' => 'setSharingId',
        'user_id' => 'setUserId',
        'creation_date' => 'setCreationDate',
        'html_for_access' => 'setHtmlForAccess',
        'html_for_expiration' => 'setHtmlForExpiration',
        'url_for_receivers' => 'setUrlForReceivers',
        'sharing_definition_id' => 'setSharingDefinitionId',
        'document_type_id' => 'setDocumentTypeId',
        'beginning' => 'setBeginning',
        'expiration' => 'setExpiration',
        'after_send' => 'setAfterSend',
        'repeat_send_mail' => 'setRepeatSendMail',
        'repeat_send_mail_time' => 'setRepeatSendMailTime',
        'repeat_send_mail_number' => 'setRepeatSendMailNumber',
        'workflow_after_read' => 'setWorkflowAfterRead',
        'workflow_after_expiration' => 'setWorkflowAfterExpiration',
        'workflow_after_expiration_not_read' => 'setWorkflowAfterExpirationNotRead',
        'alert_for_no_read' => 'setAlertForNoRead',
        'alert_for_no_read_time' => 'setAlertForNoReadTime',
        'disable_after_read' => 'setDisableAfterRead',
        'delete_after_expiration' => 'setDeleteAfterExpiration',
        'immediatly_send' => 'setImmediatlySend',
        'send_time' => 'setSendTime',
        'max_download_time' => 'setMaxDownloadTime',
        'details_as_zip' => 'setDetailsAsZip',
        'default_language' => 'setDefaultLanguage',
        'download_directly' => 'setDownloadDirectly',
        'sharing_mode' => 'setSharingMode',
        'mail_definitions' => 'setMailDefinitions',
        'share_name' => 'setShareName',
        'share_description' => 'setShareDescription',
        'is_enable' => 'setIsEnable',
        'virtual' => 'setVirtual',
        'sharing_receivers' => 'setSharingReceivers',
        'sharing_details' => 'setSharingDetails',
        'external_data' => 'setExternalData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sharing_id' => 'getSharingId',
        'user_id' => 'getUserId',
        'creation_date' => 'getCreationDate',
        'html_for_access' => 'getHtmlForAccess',
        'html_for_expiration' => 'getHtmlForExpiration',
        'url_for_receivers' => 'getUrlForReceivers',
        'sharing_definition_id' => 'getSharingDefinitionId',
        'document_type_id' => 'getDocumentTypeId',
        'beginning' => 'getBeginning',
        'expiration' => 'getExpiration',
        'after_send' => 'getAfterSend',
        'repeat_send_mail' => 'getRepeatSendMail',
        'repeat_send_mail_time' => 'getRepeatSendMailTime',
        'repeat_send_mail_number' => 'getRepeatSendMailNumber',
        'workflow_after_read' => 'getWorkflowAfterRead',
        'workflow_after_expiration' => 'getWorkflowAfterExpiration',
        'workflow_after_expiration_not_read' => 'getWorkflowAfterExpirationNotRead',
        'alert_for_no_read' => 'getAlertForNoRead',
        'alert_for_no_read_time' => 'getAlertForNoReadTime',
        'disable_after_read' => 'getDisableAfterRead',
        'delete_after_expiration' => 'getDeleteAfterExpiration',
        'immediatly_send' => 'getImmediatlySend',
        'send_time' => 'getSendTime',
        'max_download_time' => 'getMaxDownloadTime',
        'details_as_zip' => 'getDetailsAsZip',
        'default_language' => 'getDefaultLanguage',
        'download_directly' => 'getDownloadDirectly',
        'sharing_mode' => 'getSharingMode',
        'mail_definitions' => 'getMailDefinitions',
        'share_name' => 'getShareName',
        'share_description' => 'getShareDescription',
        'is_enable' => 'getIsEnable',
        'virtual' => 'getVirtual',
        'sharing_receivers' => 'getSharingReceivers',
        'sharing_details' => 'getSharingDetails',
        'external_data' => 'getExternalData'
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
        $this->container['sharing_id'] = isset($data['sharing_id']) ? $data['sharing_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['html_for_access'] = isset($data['html_for_access']) ? $data['html_for_access'] : null;
        $this->container['html_for_expiration'] = isset($data['html_for_expiration']) ? $data['html_for_expiration'] : null;
        $this->container['url_for_receivers'] = isset($data['url_for_receivers']) ? $data['url_for_receivers'] : null;
        $this->container['sharing_definition_id'] = isset($data['sharing_definition_id']) ? $data['sharing_definition_id'] : null;
        $this->container['document_type_id'] = isset($data['document_type_id']) ? $data['document_type_id'] : null;
        $this->container['beginning'] = isset($data['beginning']) ? $data['beginning'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
        $this->container['after_send'] = isset($data['after_send']) ? $data['after_send'] : null;
        $this->container['repeat_send_mail'] = isset($data['repeat_send_mail']) ? $data['repeat_send_mail'] : null;
        $this->container['repeat_send_mail_time'] = isset($data['repeat_send_mail_time']) ? $data['repeat_send_mail_time'] : null;
        $this->container['repeat_send_mail_number'] = isset($data['repeat_send_mail_number']) ? $data['repeat_send_mail_number'] : null;
        $this->container['workflow_after_read'] = isset($data['workflow_after_read']) ? $data['workflow_after_read'] : null;
        $this->container['workflow_after_expiration'] = isset($data['workflow_after_expiration']) ? $data['workflow_after_expiration'] : null;
        $this->container['workflow_after_expiration_not_read'] = isset($data['workflow_after_expiration_not_read']) ? $data['workflow_after_expiration_not_read'] : null;
        $this->container['alert_for_no_read'] = isset($data['alert_for_no_read']) ? $data['alert_for_no_read'] : null;
        $this->container['alert_for_no_read_time'] = isset($data['alert_for_no_read_time']) ? $data['alert_for_no_read_time'] : null;
        $this->container['disable_after_read'] = isset($data['disable_after_read']) ? $data['disable_after_read'] : null;
        $this->container['delete_after_expiration'] = isset($data['delete_after_expiration']) ? $data['delete_after_expiration'] : null;
        $this->container['immediatly_send'] = isset($data['immediatly_send']) ? $data['immediatly_send'] : null;
        $this->container['send_time'] = isset($data['send_time']) ? $data['send_time'] : null;
        $this->container['max_download_time'] = isset($data['max_download_time']) ? $data['max_download_time'] : null;
        $this->container['details_as_zip'] = isset($data['details_as_zip']) ? $data['details_as_zip'] : null;
        $this->container['default_language'] = isset($data['default_language']) ? $data['default_language'] : null;
        $this->container['download_directly'] = isset($data['download_directly']) ? $data['download_directly'] : null;
        $this->container['sharing_mode'] = isset($data['sharing_mode']) ? $data['sharing_mode'] : null;
        $this->container['mail_definitions'] = isset($data['mail_definitions']) ? $data['mail_definitions'] : null;
        $this->container['share_name'] = isset($data['share_name']) ? $data['share_name'] : null;
        $this->container['share_description'] = isset($data['share_description']) ? $data['share_description'] : null;
        $this->container['is_enable'] = isset($data['is_enable']) ? $data['is_enable'] : null;
        $this->container['virtual'] = isset($data['virtual']) ? $data['virtual'] : null;
        $this->container['sharing_receivers'] = isset($data['sharing_receivers']) ? $data['sharing_receivers'] : null;
        $this->container['sharing_details'] = isset($data['sharing_details']) ? $data['sharing_details'] : null;
        $this->container['external_data'] = isset($data['external_data']) ? $data['external_data'] : null;
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
     * Gets sharing_id
     *
     * @return string
     */
    public function getSharingId()
    {
        return $this->container['sharing_id'];
    }

    /**
     * Sets sharing_id
     *
     * @param string $sharing_id Sharing unique id
     *
     * @return $this
     */
    public function setSharingId($sharing_id)
    {
        $this->container['sharing_id'] = $sharing_id;

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
     * @param int $user_id Owner user id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
     * @param \DateTime $creation_date Date time of creation
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets html_for_access
     *
     * @return \Swagger\Client\Model\SharingHtmlDTO[]
     */
    public function getHtmlForAccess()
    {
        return $this->container['html_for_access'];
    }

    /**
     * Sets html_for_access
     *
     * @param \Swagger\Client\Model\SharingHtmlDTO[] $html_for_access Html for the sharing page
     *
     * @return $this
     */
    public function setHtmlForAccess($html_for_access)
    {
        $this->container['html_for_access'] = $html_for_access;

        return $this;
    }

    /**
     * Gets html_for_expiration
     *
     * @return \Swagger\Client\Model\SharingHtmlDTO[]
     */
    public function getHtmlForExpiration()
    {
        return $this->container['html_for_expiration'];
    }

    /**
     * Sets html_for_expiration
     *
     * @param \Swagger\Client\Model\SharingHtmlDTO[] $html_for_expiration Html for the expiration page
     *
     * @return $this
     */
    public function setHtmlForExpiration($html_for_expiration)
    {
        $this->container['html_for_expiration'] = $html_for_expiration;

        return $this;
    }

    /**
     * Gets url_for_receivers
     *
     * @return \Swagger\Client\Model\SharingReceiverUriDTO[]
     */
    public function getUrlForReceivers()
    {
        return $this->container['url_for_receivers'];
    }

    /**
     * Sets url_for_receivers
     *
     * @param \Swagger\Client\Model\SharingReceiverUriDTO[] $url_for_receivers Collection of URL for receivers
     *
     * @return $this
     */
    public function setUrlForReceivers($url_for_receivers)
    {
        $this->container['url_for_receivers'] = $url_for_receivers;

        return $this;
    }

    /**
     * Gets sharing_definition_id
     *
     * @return string
     */
    public function getSharingDefinitionId()
    {
        return $this->container['sharing_definition_id'];
    }

    /**
     * Sets sharing_definition_id
     *
     * @param string $sharing_definition_id Unique identifier for the configuration
     *
     * @return $this
     */
    public function setSharingDefinitionId($sharing_definition_id)
    {
        $this->container['sharing_definition_id'] = $sharing_definition_id;

        return $this;
    }

    /**
     * Gets document_type_id
     *
     * @return int
     */
    public function getDocumentTypeId()
    {
        return $this->container['document_type_id'];
    }

    /**
     * Sets document_type_id
     *
     * @param int $document_type_id System id for the documentType.
     *
     * @return $this
     */
    public function setDocumentTypeId($document_type_id)
    {
        $this->container['document_type_id'] = $document_type_id;

        return $this;
    }

    /**
     * Gets beginning
     *
     * @return int
     */
    public function getBeginning()
    {
        return $this->container['beginning'];
    }

    /**
     * Sets beginning
     *
     * @param int $beginning Days for the activation of the sharing.
     *
     * @return $this
     */
    public function setBeginning($beginning)
    {
        $this->container['beginning'] = $beginning;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return int
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param int $expiration Days for the expiration of the sharing.
     *
     * @return $this
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets after_send
     *
     * @return int
     */
    public function getAfterSend()
    {
        return $this->container['after_send'];
    }

    /**
     * Sets after_send
     *
     * @param int $after_send Possible values:  0: None  1: Email  2: R  3: RR  4: EmailArchiveContent
     *
     * @return $this
     */
    public function setAfterSend($after_send)
    {
        $this->container['after_send'] = $after_send;

        return $this;
    }

    /**
     * Gets repeat_send_mail
     *
     * @return bool
     */
    public function getRepeatSendMail()
    {
        return $this->container['repeat_send_mail'];
    }

    /**
     * Sets repeat_send_mail
     *
     * @param bool $repeat_send_mail Resend for the mail.
     *
     * @return $this
     */
    public function setRepeatSendMail($repeat_send_mail)
    {
        $this->container['repeat_send_mail'] = $repeat_send_mail;

        return $this;
    }

    /**
     * Gets repeat_send_mail_time
     *
     * @return int
     */
    public function getRepeatSendMailTime()
    {
        return $this->container['repeat_send_mail_time'];
    }

    /**
     * Sets repeat_send_mail_time
     *
     * @param int $repeat_send_mail_time Resend mail Days.
     *
     * @return $this
     */
    public function setRepeatSendMailTime($repeat_send_mail_time)
    {
        $this->container['repeat_send_mail_time'] = $repeat_send_mail_time;

        return $this;
    }

    /**
     * Gets repeat_send_mail_number
     *
     * @return int
     */
    public function getRepeatSendMailNumber()
    {
        return $this->container['repeat_send_mail_number'];
    }

    /**
     * Sets repeat_send_mail_number
     *
     * @param int $repeat_send_mail_number Max number of resend for mail.
     *
     * @return $this
     */
    public function setRepeatSendMailNumber($repeat_send_mail_number)
    {
        $this->container['repeat_send_mail_number'] = $repeat_send_mail_number;

        return $this;
    }

    /**
     * Gets workflow_after_read
     *
     * @return int
     */
    public function getWorkflowAfterRead()
    {
        return $this->container['workflow_after_read'];
    }

    /**
     * Sets workflow_after_read
     *
     * @param int $workflow_after_read Workflow id for the read operation.
     *
     * @return $this
     */
    public function setWorkflowAfterRead($workflow_after_read)
    {
        $this->container['workflow_after_read'] = $workflow_after_read;

        return $this;
    }

    /**
     * Gets workflow_after_expiration
     *
     * @return int
     */
    public function getWorkflowAfterExpiration()
    {
        return $this->container['workflow_after_expiration'];
    }

    /**
     * Sets workflow_after_expiration
     *
     * @param int $workflow_after_expiration Workflow id for the expiration of a read sharing
     *
     * @return $this
     */
    public function setWorkflowAfterExpiration($workflow_after_expiration)
    {
        $this->container['workflow_after_expiration'] = $workflow_after_expiration;

        return $this;
    }

    /**
     * Gets workflow_after_expiration_not_read
     *
     * @return int
     */
    public function getWorkflowAfterExpirationNotRead()
    {
        return $this->container['workflow_after_expiration_not_read'];
    }

    /**
     * Sets workflow_after_expiration_not_read
     *
     * @param int $workflow_after_expiration_not_read Workflow id for the expiration of a not read sharing
     *
     * @return $this
     */
    public function setWorkflowAfterExpirationNotRead($workflow_after_expiration_not_read)
    {
        $this->container['workflow_after_expiration_not_read'] = $workflow_after_expiration_not_read;

        return $this;
    }

    /**
     * Gets alert_for_no_read
     *
     * @return bool
     */
    public function getAlertForNoRead()
    {
        return $this->container['alert_for_no_read'];
    }

    /**
     * Sets alert_for_no_read
     *
     * @param bool $alert_for_no_read Enable warning for no read sharing.
     *
     * @return $this
     */
    public function setAlertForNoRead($alert_for_no_read)
    {
        $this->container['alert_for_no_read'] = $alert_for_no_read;

        return $this;
    }

    /**
     * Gets alert_for_no_read_time
     *
     * @return int
     */
    public function getAlertForNoReadTime()
    {
        return $this->container['alert_for_no_read_time'];
    }

    /**
     * Sets alert_for_no_read_time
     *
     * @param int $alert_for_no_read_time Warning message for no read sharing days.
     *
     * @return $this
     */
    public function setAlertForNoReadTime($alert_for_no_read_time)
    {
        $this->container['alert_for_no_read_time'] = $alert_for_no_read_time;

        return $this;
    }

    /**
     * Gets disable_after_read
     *
     * @return bool
     */
    public function getDisableAfterRead()
    {
        return $this->container['disable_after_read'];
    }

    /**
     * Sets disable_after_read
     *
     * @param bool $disable_after_read Disable sharing after read.
     *
     * @return $this
     */
    public function setDisableAfterRead($disable_after_read)
    {
        $this->container['disable_after_read'] = $disable_after_read;

        return $this;
    }

    /**
     * Gets delete_after_expiration
     *
     * @return bool
     */
    public function getDeleteAfterExpiration()
    {
        return $this->container['delete_after_expiration'];
    }

    /**
     * Sets delete_after_expiration
     *
     * @param bool $delete_after_expiration Delete after expiration.
     *
     * @return $this
     */
    public function setDeleteAfterExpiration($delete_after_expiration)
    {
        $this->container['delete_after_expiration'] = $delete_after_expiration;

        return $this;
    }

    /**
     * Gets immediatly_send
     *
     * @return bool
     */
    public function getImmediatlySend()
    {
        return $this->container['immediatly_send'];
    }

    /**
     * Sets immediatly_send
     *
     * @param bool $immediatly_send Immediatly send.
     *
     * @return $this
     */
    public function setImmediatlySend($immediatly_send)
    {
        $this->container['immediatly_send'] = $immediatly_send;

        return $this;
    }

    /**
     * Gets send_time
     *
     * @return \DateTime
     */
    public function getSendTime()
    {
        return $this->container['send_time'];
    }

    /**
     * Sets send_time
     *
     * @param \DateTime $send_time Send datetime.
     *
     * @return $this
     */
    public function setSendTime($send_time)
    {
        $this->container['send_time'] = $send_time;

        return $this;
    }

    /**
     * Gets max_download_time
     *
     * @return int
     */
    public function getMaxDownloadTime()
    {
        return $this->container['max_download_time'];
    }

    /**
     * Sets max_download_time
     *
     * @param int $max_download_time Max number of download
     *
     * @return $this
     */
    public function setMaxDownloadTime($max_download_time)
    {
        $this->container['max_download_time'] = $max_download_time;

        return $this;
    }

    /**
     * Gets details_as_zip
     *
     * @return bool
     */
    public function getDetailsAsZip()
    {
        return $this->container['details_as_zip'];
    }

    /**
     * Sets details_as_zip
     *
     * @param bool $details_as_zip Archive the details in one zip
     *
     * @return $this
     */
    public function setDetailsAsZip($details_as_zip)
    {
        $this->container['details_as_zip'] = $details_as_zip;

        return $this;
    }

    /**
     * Gets default_language
     *
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->container['default_language'];
    }

    /**
     * Sets default_language
     *
     * @param string $default_language Default language.
     *
     * @return $this
     */
    public function setDefaultLanguage($default_language)
    {
        $this->container['default_language'] = $default_language;

        return $this;
    }

    /**
     * Gets download_directly
     *
     * @return bool
     */
    public function getDownloadDirectly()
    {
        return $this->container['download_directly'];
    }

    /**
     * Sets download_directly
     *
     * @param bool $download_directly Donwload the documents directly from mail
     *
     * @return $this
     */
    public function setDownloadDirectly($download_directly)
    {
        $this->container['download_directly'] = $download_directly;

        return $this;
    }

    /**
     * Gets sharing_mode
     *
     * @return int
     */
    public function getSharingMode()
    {
        return $this->container['sharing_mode'];
    }

    /**
     * Sets sharing_mode
     *
     * @param int $sharing_mode Possible values:  0: Link  1: Attachment  2: None
     *
     * @return $this
     */
    public function setSharingMode($sharing_mode)
    {
        $this->container['sharing_mode'] = $sharing_mode;

        return $this;
    }

    /**
     * Gets mail_definitions
     *
     * @return \Swagger\Client\Model\SharingMailDTO[]
     */
    public function getMailDefinitions()
    {
        return $this->container['mail_definitions'];
    }

    /**
     * Sets mail_definitions
     *
     * @param \Swagger\Client\Model\SharingMailDTO[] $mail_definitions List of mails to send.
     *
     * @return $this
     */
    public function setMailDefinitions($mail_definitions)
    {
        $this->container['mail_definitions'] = $mail_definitions;

        return $this;
    }

    /**
     * Gets share_name
     *
     * @return string
     */
    public function getShareName()
    {
        return $this->container['share_name'];
    }

    /**
     * Sets share_name
     *
     * @param string $share_name Sharing name.
     *
     * @return $this
     */
    public function setShareName($share_name)
    {
        $this->container['share_name'] = $share_name;

        return $this;
    }

    /**
     * Gets share_description
     *
     * @return string
     */
    public function getShareDescription()
    {
        return $this->container['share_description'];
    }

    /**
     * Sets share_description
     *
     * @param string $share_description Sharing description.
     *
     * @return $this
     */
    public function setShareDescription($share_description)
    {
        $this->container['share_description'] = $share_description;

        return $this;
    }

    /**
     * Gets is_enable
     *
     * @return bool
     */
    public function getIsEnable()
    {
        return $this->container['is_enable'];
    }

    /**
     * Sets is_enable
     *
     * @param bool $is_enable Is enable.
     *
     * @return $this
     */
    public function setIsEnable($is_enable)
    {
        $this->container['is_enable'] = $is_enable;

        return $this;
    }

    /**
     * Gets virtual
     *
     * @return bool
     */
    public function getVirtual()
    {
        return $this->container['virtual'];
    }

    /**
     * Sets virtual
     *
     * @param bool $virtual Is virtual sharing.
     *
     * @return $this
     */
    public function setVirtual($virtual)
    {
        $this->container['virtual'] = $virtual;

        return $this;
    }

    /**
     * Gets sharing_receivers
     *
     * @return \Swagger\Client\Model\SharingReceiverDTO[]
     */
    public function getSharingReceivers()
    {
        return $this->container['sharing_receivers'];
    }

    /**
     * Sets sharing_receivers
     *
     * @param \Swagger\Client\Model\SharingReceiverDTO[] $sharing_receivers Sharing receivers.
     *
     * @return $this
     */
    public function setSharingReceivers($sharing_receivers)
    {
        $this->container['sharing_receivers'] = $sharing_receivers;

        return $this;
    }

    /**
     * Gets sharing_details
     *
     * @return \Swagger\Client\Model\SharingDetailDTO[]
     */
    public function getSharingDetails()
    {
        return $this->container['sharing_details'];
    }

    /**
     * Sets sharing_details
     *
     * @param \Swagger\Client\Model\SharingDetailDTO[] $sharing_details Sharing details.
     *
     * @return $this
     */
    public function setSharingDetails($sharing_details)
    {
        $this->container['sharing_details'] = $sharing_details;

        return $this;
    }

    /**
     * Gets external_data
     *
     * @return \Swagger\Client\Model\KeyValueDTO[]
     */
    public function getExternalData()
    {
        return $this->container['external_data'];
    }

    /**
     * Sets external_data
     *
     * @param \Swagger\Client\Model\KeyValueDTO[] $external_data Sharing external data.
     *
     * @return $this
     */
    public function setExternalData($external_data)
    {
        $this->container['external_data'] = $external_data;

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

