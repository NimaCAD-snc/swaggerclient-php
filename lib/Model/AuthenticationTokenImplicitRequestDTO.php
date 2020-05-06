<?php
/**
 * AuthenticationTokenImplicitRequestDTO
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
 * AuthenticationTokenImplicitRequestDTO Class Doc Comment
 *
 * @category Class
 * @description Authentication token request for implicit authentication
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationTokenImplicitRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuthenticationTokenImplicitRequestDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_id' => 'string',
        'client_secret' => 'string',
        'logon_provider_id' => 'string',
        'impersonate_user_id' => 'int',
        'impersonate_external_id' => 'string',
        'client_version' => 'string',
        'machine_key' => 'string',
        'language_culture_name' => 'string',
        'success_redirect_uri' => 'string',
        'scope_list' => 'string[]',
        'client_ip_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_id' => null,
        'client_secret' => null,
        'logon_provider_id' => null,
        'impersonate_user_id' => 'int32',
        'impersonate_external_id' => null,
        'client_version' => null,
        'machine_key' => null,
        'language_culture_name' => null,
        'success_redirect_uri' => null,
        'scope_list' => null,
        'client_ip_address' => null
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
        'client_id' => 'clientId',
        'client_secret' => 'clientSecret',
        'logon_provider_id' => 'logonProviderId',
        'impersonate_user_id' => 'impersonateUserId',
        'impersonate_external_id' => 'impersonateExternalId',
        'client_version' => 'clientVersion',
        'machine_key' => 'machineKey',
        'language_culture_name' => 'languageCultureName',
        'success_redirect_uri' => 'successRedirectUri',
        'scope_list' => 'scopeList',
        'client_ip_address' => 'clientIpAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_id' => 'setClientId',
        'client_secret' => 'setClientSecret',
        'logon_provider_id' => 'setLogonProviderId',
        'impersonate_user_id' => 'setImpersonateUserId',
        'impersonate_external_id' => 'setImpersonateExternalId',
        'client_version' => 'setClientVersion',
        'machine_key' => 'setMachineKey',
        'language_culture_name' => 'setLanguageCultureName',
        'success_redirect_uri' => 'setSuccessRedirectUri',
        'scope_list' => 'setScopeList',
        'client_ip_address' => 'setClientIpAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_id' => 'getClientId',
        'client_secret' => 'getClientSecret',
        'logon_provider_id' => 'getLogonProviderId',
        'impersonate_user_id' => 'getImpersonateUserId',
        'impersonate_external_id' => 'getImpersonateExternalId',
        'client_version' => 'getClientVersion',
        'machine_key' => 'getMachineKey',
        'language_culture_name' => 'getLanguageCultureName',
        'success_redirect_uri' => 'getSuccessRedirectUri',
        'scope_list' => 'getScopeList',
        'client_ip_address' => 'getClientIpAddress'
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
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['client_secret'] = isset($data['client_secret']) ? $data['client_secret'] : null;
        $this->container['logon_provider_id'] = isset($data['logon_provider_id']) ? $data['logon_provider_id'] : null;
        $this->container['impersonate_user_id'] = isset($data['impersonate_user_id']) ? $data['impersonate_user_id'] : null;
        $this->container['impersonate_external_id'] = isset($data['impersonate_external_id']) ? $data['impersonate_external_id'] : null;
        $this->container['client_version'] = isset($data['client_version']) ? $data['client_version'] : null;
        $this->container['machine_key'] = isset($data['machine_key']) ? $data['machine_key'] : null;
        $this->container['language_culture_name'] = isset($data['language_culture_name']) ? $data['language_culture_name'] : null;
        $this->container['success_redirect_uri'] = isset($data['success_redirect_uri']) ? $data['success_redirect_uri'] : null;
        $this->container['scope_list'] = isset($data['scope_list']) ? $data['scope_list'] : null;
        $this->container['client_ip_address'] = isset($data['client_ip_address']) ? $data['client_ip_address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
        }
        if ($this->container['client_secret'] === null) {
            $invalidProperties[] = "'client_secret' can't be null";
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

        if ($this->container['client_id'] === null) {
            return false;
        }
        if ($this->container['client_secret'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id Client id
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets client_secret
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['client_secret'];
    }

    /**
     * Sets client_secret
     *
     * @param string $client_secret Client secret
     *
     * @return $this
     */
    public function setClientSecret($client_secret)
    {
        $this->container['client_secret'] = $client_secret;

        return $this;
    }

    /**
     * Gets logon_provider_id
     *
     * @return string
     */
    public function getLogonProviderId()
    {
        return $this->container['logon_provider_id'];
    }

    /**
     * Sets logon_provider_id
     *
     * @param string $logon_provider_id Logon provider for authentication (existing association required)
     *
     * @return $this
     */
    public function setLogonProviderId($logon_provider_id)
    {
        $this->container['logon_provider_id'] = $logon_provider_id;

        return $this;
    }

    /**
     * Gets impersonate_user_id
     *
     * @return int
     */
    public function getImpersonateUserId()
    {
        return $this->container['impersonate_user_id'];
    }

    /**
     * Sets impersonate_user_id
     *
     * @param int $impersonate_user_id Impersonate user id
     *
     * @return $this
     */
    public function setImpersonateUserId($impersonate_user_id)
    {
        $this->container['impersonate_user_id'] = $impersonate_user_id;

        return $this;
    }

    /**
     * Gets impersonate_external_id
     *
     * @return string
     */
    public function getImpersonateExternalId()
    {
        return $this->container['impersonate_external_id'];
    }

    /**
     * Sets impersonate_external_id
     *
     * @param string $impersonate_external_id Impersonate user by externalId
     *
     * @return $this
     */
    public function setImpersonateExternalId($impersonate_external_id)
    {
        $this->container['impersonate_external_id'] = $impersonate_external_id;

        return $this;
    }

    /**
     * Gets client_version
     *
     * @return string
     */
    public function getClientVersion()
    {
        return $this->container['client_version'];
    }

    /**
     * Sets client_version
     *
     * @param string $client_version Client version
     *
     * @return $this
     */
    public function setClientVersion($client_version)
    {
        $this->container['client_version'] = $client_version;

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
     * @param string $machine_key Machine Key
     *
     * @return $this
     */
    public function setMachineKey($machine_key)
    {
        $this->container['machine_key'] = $machine_key;

        return $this;
    }

    /**
     * Gets language_culture_name
     *
     * @return string
     */
    public function getLanguageCultureName()
    {
        return $this->container['language_culture_name'];
    }

    /**
     * Sets language_culture_name
     *
     * @param string $language_culture_name Language
     *
     * @return $this
     */
    public function setLanguageCultureName($language_culture_name)
    {
        $this->container['language_culture_name'] = $language_culture_name;

        return $this;
    }

    /**
     * Gets success_redirect_uri
     *
     * @return string
     */
    public function getSuccessRedirectUri()
    {
        return $this->container['success_redirect_uri'];
    }

    /**
     * Sets success_redirect_uri
     *
     * @param string $success_redirect_uri Url for success redirect
     *
     * @return $this
     */
    public function setSuccessRedirectUri($success_redirect_uri)
    {
        $this->container['success_redirect_uri'] = $success_redirect_uri;

        return $this;
    }

    /**
     * Gets scope_list
     *
     * @return string[]
     */
    public function getScopeList()
    {
        return $this->container['scope_list'];
    }

    /**
     * Sets scope_list
     *
     * @param string[] $scope_list Request scope list
     *
     * @return $this
     */
    public function setScopeList($scope_list)
    {
        $this->container['scope_list'] = $scope_list;

        return $this;
    }

    /**
     * Gets client_ip_address
     *
     * @return string
     */
    public function getClientIpAddress()
    {
        return $this->container['client_ip_address'];
    }

    /**
     * Sets client_ip_address
     *
     * @param string $client_ip_address Request client Ip
     *
     * @return $this
     */
    public function setClientIpAddress($client_ip_address)
    {
        $this->container['client_ip_address'] = $client_ip_address;

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


