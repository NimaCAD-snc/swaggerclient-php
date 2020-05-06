<?php
/**
 * ServerLicense
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
 * ServerLicense Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServerLicense implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServerLicense';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'purpose' => 'string',
        'type' => 'string',
        'id_license' => 'string',
        'machine_key' => 'string',
        'activation_code' => 'string',
        'note' => 'string',
        'issuer' => 'string',
        'issued_to' => '\Swagger\Client\Model\LicenseCustomer',
        'utc_issued_date' => '\DateTime',
        'format_version' => '\Swagger\Client\Model\Version',
        'format_version_string' => 'string',
        'software_version' => '\Swagger\Client\Model\Version',
        'software_version_string' => 'string',
        'module_list' => '\Swagger\Client\Model\LicenseModule[]',
        'permission_list' => '\Swagger\Client\Model\LicensePermission[]',
        'module_installation_list' => '\Swagger\Client\Model\LicenseModuleInstallation[]',
        'signature' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'purpose' => null,
        'type' => null,
        'id_license' => null,
        'machine_key' => null,
        'activation_code' => null,
        'note' => null,
        'issuer' => null,
        'issued_to' => null,
        'utc_issued_date' => 'date-time',
        'format_version' => null,
        'format_version_string' => null,
        'software_version' => null,
        'software_version_string' => null,
        'module_list' => null,
        'permission_list' => null,
        'module_installation_list' => null,
        'signature' => 'byte'
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
        'purpose' => 'purpose',
        'type' => 'type',
        'id_license' => 'idLicense',
        'machine_key' => 'machineKey',
        'activation_code' => 'activationCode',
        'note' => 'note',
        'issuer' => 'issuer',
        'issued_to' => 'issuedTo',
        'utc_issued_date' => 'utcIssuedDate',
        'format_version' => 'formatVersion',
        'format_version_string' => 'formatVersionString',
        'software_version' => 'softwareVersion',
        'software_version_string' => 'softwareVersionString',
        'module_list' => 'moduleList',
        'permission_list' => 'permissionList',
        'module_installation_list' => 'moduleInstallationList',
        'signature' => 'signature'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purpose' => 'setPurpose',
        'type' => 'setType',
        'id_license' => 'setIdLicense',
        'machine_key' => 'setMachineKey',
        'activation_code' => 'setActivationCode',
        'note' => 'setNote',
        'issuer' => 'setIssuer',
        'issued_to' => 'setIssuedTo',
        'utc_issued_date' => 'setUtcIssuedDate',
        'format_version' => 'setFormatVersion',
        'format_version_string' => 'setFormatVersionString',
        'software_version' => 'setSoftwareVersion',
        'software_version_string' => 'setSoftwareVersionString',
        'module_list' => 'setModuleList',
        'permission_list' => 'setPermissionList',
        'module_installation_list' => 'setModuleInstallationList',
        'signature' => 'setSignature'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purpose' => 'getPurpose',
        'type' => 'getType',
        'id_license' => 'getIdLicense',
        'machine_key' => 'getMachineKey',
        'activation_code' => 'getActivationCode',
        'note' => 'getNote',
        'issuer' => 'getIssuer',
        'issued_to' => 'getIssuedTo',
        'utc_issued_date' => 'getUtcIssuedDate',
        'format_version' => 'getFormatVersion',
        'format_version_string' => 'getFormatVersionString',
        'software_version' => 'getSoftwareVersion',
        'software_version_string' => 'getSoftwareVersionString',
        'module_list' => 'getModuleList',
        'permission_list' => 'getPermissionList',
        'module_installation_list' => 'getModuleInstallationList',
        'signature' => 'getSignature'
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

    const PURPOSE_RIVENDITORE_USO_INTERNO = 'RivenditoreUsoInterno';
    const PURPOSE_NFR = 'NFR';
    const PURPOSE_TEST_RIVENDITORE = 'TestRivenditore';
    const PURPOSE_CORSO_AR_XIVAR_ACADEMY = 'CorsoARXivarAcademy';
    const PURPOSE_CORSO_ALTRO = 'CorsoAltro';
    const PURPOSE_PRODUZIONE_CLIENTE_FINALE = 'ProduzioneClienteFinale';
    const PURPOSE_TEST_CLIENTE_FINALE = 'TestClienteFinale';
    const PURPOSE_DEMO = 'Demo';
    const PURPOSE_DEVELOPMENT = 'Development';
    const PURPOSE_NEXT_FE = 'NextFe';
    const PURPOSE_NEXT_FE_TEST = 'NextFeTest';
    const TYPE_STANDARD = 'Standard';
    const TYPE_PLUGIN_MANAGER = 'PluginManager';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPurposeAllowableValues()
    {
        return [
            self::PURPOSE_RIVENDITORE_USO_INTERNO,
            self::PURPOSE_NFR,
            self::PURPOSE_TEST_RIVENDITORE,
            self::PURPOSE_CORSO_AR_XIVAR_ACADEMY,
            self::PURPOSE_CORSO_ALTRO,
            self::PURPOSE_PRODUZIONE_CLIENTE_FINALE,
            self::PURPOSE_TEST_CLIENTE_FINALE,
            self::PURPOSE_DEMO,
            self::PURPOSE_DEVELOPMENT,
            self::PURPOSE_NEXT_FE,
            self::PURPOSE_NEXT_FE_TEST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STANDARD,
            self::TYPE_PLUGIN_MANAGER,
        ];
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
        $this->container['purpose'] = isset($data['purpose']) ? $data['purpose'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id_license'] = isset($data['id_license']) ? $data['id_license'] : null;
        $this->container['machine_key'] = isset($data['machine_key']) ? $data['machine_key'] : null;
        $this->container['activation_code'] = isset($data['activation_code']) ? $data['activation_code'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['issued_to'] = isset($data['issued_to']) ? $data['issued_to'] : null;
        $this->container['utc_issued_date'] = isset($data['utc_issued_date']) ? $data['utc_issued_date'] : null;
        $this->container['format_version'] = isset($data['format_version']) ? $data['format_version'] : null;
        $this->container['format_version_string'] = isset($data['format_version_string']) ? $data['format_version_string'] : null;
        $this->container['software_version'] = isset($data['software_version']) ? $data['software_version'] : null;
        $this->container['software_version_string'] = isset($data['software_version_string']) ? $data['software_version_string'] : null;
        $this->container['module_list'] = isset($data['module_list']) ? $data['module_list'] : null;
        $this->container['permission_list'] = isset($data['permission_list']) ? $data['permission_list'] : null;
        $this->container['module_installation_list'] = isset($data['module_installation_list']) ? $data['module_installation_list'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPurposeAllowableValues();
        if (!in_array($this->container['purpose'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'purpose', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['signature']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['signature'])) {
            $invalidProperties[] = "invalid value for 'signature', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

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

        $allowedValues = $this->getPurposeAllowableValues();
        if (!in_array($this->container['purpose'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['signature'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets purpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param string $purpose purpose
     *
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $allowedValues = $this->getPurposeAllowableValues();
        if (!is_null($purpose) && !in_array($purpose, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'purpose', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id_license
     *
     * @return string
     */
    public function getIdLicense()
    {
        return $this->container['id_license'];
    }

    /**
     * Sets id_license
     *
     * @param string $id_license id_license
     *
     * @return $this
     */
    public function setIdLicense($id_license)
    {
        $this->container['id_license'] = $id_license;

        return $this;
    }

    /**
     * Gets machine_key
     *
     * @return string
     */
    public function getMachineKey()
    {
        return $this->container['machine_key'];
    }

    /**
     * Sets machine_key
     *
     * @param string $machine_key machine_key
     *
     * @return $this
     */
    public function setMachineKey($machine_key)
    {
        $this->container['machine_key'] = $machine_key;

        return $this;
    }

    /**
     * Gets activation_code
     *
     * @return string
     */
    public function getActivationCode()
    {
        return $this->container['activation_code'];
    }

    /**
     * Sets activation_code
     *
     * @param string $activation_code activation_code
     *
     * @return $this
     */
    public function setActivationCode($activation_code)
    {
        $this->container['activation_code'] = $activation_code;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return string
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param string $issuer issuer
     *
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets issued_to
     *
     * @return \Swagger\Client\Model\LicenseCustomer
     */
    public function getIssuedTo()
    {
        return $this->container['issued_to'];
    }

    /**
     * Sets issued_to
     *
     * @param \Swagger\Client\Model\LicenseCustomer $issued_to issued_to
     *
     * @return $this
     */
    public function setIssuedTo($issued_to)
    {
        $this->container['issued_to'] = $issued_to;

        return $this;
    }

    /**
     * Gets utc_issued_date
     *
     * @return \DateTime
     */
    public function getUtcIssuedDate()
    {
        return $this->container['utc_issued_date'];
    }

    /**
     * Sets utc_issued_date
     *
     * @param \DateTime $utc_issued_date utc_issued_date
     *
     * @return $this
     */
    public function setUtcIssuedDate($utc_issued_date)
    {
        $this->container['utc_issued_date'] = $utc_issued_date;

        return $this;
    }

    /**
     * Gets format_version
     *
     * @return \Swagger\Client\Model\Version
     */
    public function getFormatVersion()
    {
        return $this->container['format_version'];
    }

    /**
     * Sets format_version
     *
     * @param \Swagger\Client\Model\Version $format_version format_version
     *
     * @return $this
     */
    public function setFormatVersion($format_version)
    {
        $this->container['format_version'] = $format_version;

        return $this;
    }

    /**
     * Gets format_version_string
     *
     * @return string
     */
    public function getFormatVersionString()
    {
        return $this->container['format_version_string'];
    }

    /**
     * Sets format_version_string
     *
     * @param string $format_version_string format_version_string
     *
     * @return $this
     */
    public function setFormatVersionString($format_version_string)
    {
        $this->container['format_version_string'] = $format_version_string;

        return $this;
    }

    /**
     * Gets software_version
     *
     * @return \Swagger\Client\Model\Version
     */
    public function getSoftwareVersion()
    {
        return $this->container['software_version'];
    }

    /**
     * Sets software_version
     *
     * @param \Swagger\Client\Model\Version $software_version software_version
     *
     * @return $this
     */
    public function setSoftwareVersion($software_version)
    {
        $this->container['software_version'] = $software_version;

        return $this;
    }

    /**
     * Gets software_version_string
     *
     * @return string
     */
    public function getSoftwareVersionString()
    {
        return $this->container['software_version_string'];
    }

    /**
     * Sets software_version_string
     *
     * @param string $software_version_string software_version_string
     *
     * @return $this
     */
    public function setSoftwareVersionString($software_version_string)
    {
        $this->container['software_version_string'] = $software_version_string;

        return $this;
    }

    /**
     * Gets module_list
     *
     * @return \Swagger\Client\Model\LicenseModule[]
     */
    public function getModuleList()
    {
        return $this->container['module_list'];
    }

    /**
     * Sets module_list
     *
     * @param \Swagger\Client\Model\LicenseModule[] $module_list module_list
     *
     * @return $this
     */
    public function setModuleList($module_list)
    {
        $this->container['module_list'] = $module_list;

        return $this;
    }

    /**
     * Gets permission_list
     *
     * @return \Swagger\Client\Model\LicensePermission[]
     */
    public function getPermissionList()
    {
        return $this->container['permission_list'];
    }

    /**
     * Sets permission_list
     *
     * @param \Swagger\Client\Model\LicensePermission[] $permission_list permission_list
     *
     * @return $this
     */
    public function setPermissionList($permission_list)
    {
        $this->container['permission_list'] = $permission_list;

        return $this;
    }

    /**
     * Gets module_installation_list
     *
     * @return \Swagger\Client\Model\LicenseModuleInstallation[]
     */
    public function getModuleInstallationList()
    {
        return $this->container['module_installation_list'];
    }

    /**
     * Sets module_installation_list
     *
     * @param \Swagger\Client\Model\LicenseModuleInstallation[] $module_installation_list module_installation_list
     *
     * @return $this
     */
    public function setModuleInstallationList($module_installation_list)
    {
        $this->container['module_installation_list'] = $module_installation_list;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string $signature signature
     *
     * @return $this
     */
    public function setSignature($signature)
    {

        if (!is_null($signature) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $signature))) {
            throw new \InvalidArgumentException("invalid value for $signature when calling ServerLicense., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['signature'] = $signature;

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


