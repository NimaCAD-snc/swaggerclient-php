<?php
/**
 * SignDocumentDataDTO
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
 * SignDocumentDataDTO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignDocumentDataDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SignDocumentDataDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dm_counters_tables' => 'int',
        'key_id' => 'int',
        'filename' => 'string',
        'description' => 'string',
        'has_profile' => 'bool',
        'force_sign' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dm_counters_tables' => 'int32',
        'key_id' => 'int32',
        'filename' => null,
        'description' => null,
        'has_profile' => null,
        'force_sign' => null
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
        'dm_counters_tables' => 'dmCountersTables',
        'key_id' => 'keyId',
        'filename' => 'filename',
        'description' => 'description',
        'has_profile' => 'hasProfile',
        'force_sign' => 'forceSign'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dm_counters_tables' => 'setDmCountersTables',
        'key_id' => 'setKeyId',
        'filename' => 'setFilename',
        'description' => 'setDescription',
        'has_profile' => 'setHasProfile',
        'force_sign' => 'setForceSign'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dm_counters_tables' => 'getDmCountersTables',
        'key_id' => 'getKeyId',
        'filename' => 'getFilename',
        'description' => 'getDescription',
        'has_profile' => 'getHasProfile',
        'force_sign' => 'getForceSign'
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
        $this->container['dm_counters_tables'] = isset($data['dm_counters_tables']) ? $data['dm_counters_tables'] : null;
        $this->container['key_id'] = isset($data['key_id']) ? $data['key_id'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['has_profile'] = isset($data['has_profile']) ? $data['has_profile'] : null;
        $this->container['force_sign'] = isset($data['force_sign']) ? $data['force_sign'] : null;
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
     * Gets dm_counters_tables
     *
     * @return int
     */
    public function getDmCountersTables()
    {
        return $this->container['dm_counters_tables'];
    }

    /**
     * Sets dm_counters_tables
     *
     * @param int $dm_counters_tables Possible values:  0: DM_ALLEGATIDOC  1: DM_ALLEGATIFAX  2: DM_ALLEGATIWORK  3: DM_ASSOCIAZIONI  4: DM_CAMPIPRATICA  5: DM_CAMPIPRATICHECBO  6: DM_CAMPISPECGRP  7: DM_CONTATTI  8: DM_FASCICOLI  9: DM_FAXOUT  10: DM_NOTE  11: DM_OPZIONI  12: DM_PERMESSI_FOLDER  13: DM_PERMESSI_RUBRICA  14: DM_PROFILE  15: DM_GRUPPI  16: DM_RUBRICA  17: DM_UTENTI  18: DM_REVISIONI  19: DM_SECURITY  20: DM_STATOSECURITY  21: DM_TIPIPRATICHE  22: DM_TABELLE  23: DM_TIPI_UTENTI  24: DM_ELENCO_ORG  25: DM_ORGANIGRAMMA  26: DM_ORGDESIGN  27: DM_CATRUBRICHE  28: DM_CAMPI  29: DM_CAMPI_VALORI  30: DM_RUBRICA_OPZIONALI  31: DM_NOTECONTATTI  32: DM_SECURITY_DOC  33: DM_NPCE_OUT  34: DM_LOG  35: DM_NPCE_LOG  36: DM_DESKTOP  37: DM_VARIABILIPROCESSO  38: DM_DATIPROFILO  39: DM_AUTOPROFILO  40: DM_PROTOCOLLI  41: DM_DATI_ENTE  42: DM_NUMERAZIONE  43: DM_FILEINFOLDER  44: DM_INOLTRO  45: DM_DOCMOV  46: DM_CAMPIMESSAGGIO  47: DM_DETTAGLIMAIL  48: DM_MAILOUT  49: DM_DELEGATI  50: DM_MSG  51: DM_ACCOUNT  52: DM_FOLDERTYPE  53: SD_ASSOCDOC  54: DM_COMBO  55: DM_REGOLEUNIVOCITA  56: DM_BARCODE  57: DM_DOCALLEGATI  58: DM_STARTWORKFLOW  59: DM_FILTRO  60: DM_ELENCOPRATICHE  61: DM_TESTO  62: DM_PROCBATCH  63: DM_EVENTIFLOW  64: DM_TRADUZIONI  65: DM_TIPIDOCUMENTO  66: DM_GRUPPIMODELLI  67: DM_ASSOCIAFOLDER_DATIPROFILO  68: DM_ASSOCIAFOLDER  69: DM_MODULIOFFICE  70: DM_EMERGENZA  71: DM_TASKEXECUTE  72: DM_NOTEWORK  73: DM_PERMESSIALLEGATI  74: DM_PROCESSDOC  75: DM_MASSIVEUPDATES  76: DM_MASSIVEUPDATES_DATIPROFILO  77: DM_MASSIVEUPDATES_DATA  78: DM_COMANDITASK  79: DM_TRADUZIONI_PKG  80: DM_FIGUREPROCESSO  81: DM_PROMEMORIA  82: DM_ALLEGATIPROMO  83: DM_SIGNDELEGATE  84: DM_SIGNCERT  85: DM_SIGNCERTLOCATION  86: DM_VARIABILIQUERY  87: DM_ASSOCIAFOLDER_MAPPING  88: DM_PERMESSINOTE  89: DM_WORKFLOW_EXTRAGRANT  90: DM_QUEUE  91: DM_QUEUEDETAIL  92: NOTHING  93: DM_CACHE  94: DM_THUMBNAIL  95: DM_SMSACCOUNT  96: DM_SHARING  97: DM_SHARING_DEFINITION  98: DM_SHARING_DETAIL  99: DM_SHARING_RECEIVER  100: DM_SHARING_OPERATION  101: DM_TASKWORK  102: DM_TASKWORK_CLOSE  103: DM_INSTRUCTIONS  104: DM_TASKS  105: DM_WORKFLOW  106: DM_AOO  107: DM_LOGONPROVIDERS  108: DM_MASSIVEUPDATES_MAPPING  109: DM_STORAGE  110: DM_TIPIDOC_DEFMAIL  111: DM_LOGS  112: DM_PN_DEVICE  113: DM_PN_NOTIFICATIONS  114: DM_COLLABORATION  115: DM_COLLABORATION_MASTER  116: DM_COLLABORATION_DETAIL  117: WS_VERSAMENTI  118: WS_VERSAMENTI_DETT_ATT  119: WS_VERSAMENTI_DETT_NOTE  120: WS_VERSAMENTI_DETT_DOC  121: WS_AOS  122: WS_AOS_MAPPING  123: WS_DOCTOIX  124: WS_DOCTOIX_DETAIL  125: WS_TIPIDOCUMENTO  126: WS_CREDENTIAL  127: WS_CLASSINORM  128: WS_CLASSINORM_FILTER  129: WS_TIPIDOC_EXPORT  130: WS_TIPIDOC_ROTT  131: WS_NOTIFY  132: WS_NOTIFY_MAPPING  133: DM_COLLABORATION_TEMPLATE  134: DM_COLLABORATION_TAKEOFF  135: DM_COLLABORATION_TEMPLATE_M  136: WS_CONFCLASSEIXCE  137: WS_CAMPIMETADATIIXCE  138: WS_DOCTOIXCE  139: WS_DOCTOIXCE_DETAIL  140: WS_VERSAMENTO  141: DM_PLUGINCUSTOM_DETT  142: DM_PLUGINCUSTOM  143: DM_PLUGINCUSTOMWF  144: DM_PLUGINCUSTOMWF_CONF  145: DM_LINKS  146: DM_LINKS_MANSDYN  147: DM_LINKS_MANSDYN_DETT  148: DM_MANSIONIDYNTASK  149: DM_FASCICOLI_ASSOCIAFOLDER  150: DM_WEBSERVICESWF_LINK  151: DM_TASKDOC_ESITI  152: DM_PLUGINCUSTOM_CONF  153: DM_PLUGINCUSTOM_CONFIP  154: DM_PLUGINCUSTOM_CONFUSER  155: DM_INDEX  156: WS_DOCTOIXCE_VALIDATION  157: DM_BARCODE_SETTINGS  158: DM_LOG_MASTER  159: DM_UTENTI_USEDPSW  160: DM_CAMPIMODULI_MATRICE  161: DM_MAPWORKFLOW  162: DM_ALLEGATIDOC_REV  163: DM_FASCICOLI_RULES  164: DM_FASCICOLIRULESDETAIL  165: DM_FASCICOLI_RULES_USERS  166: DM_ARXDRIVESHARERULE  167: DM_ARXDRIVESHARERULEUSERS  168: DM_LAYOUT  169: DM_LAYOUT_DETAILS  170: DM_FASCICOLI_MASK  171: DM_MAILWF  172: DM_MAILWF_ARCHIVE  173: DM_ACCOUNT_IMAP  174: DM_FILTRIMAIL  175: DM_MAPPING_NOTES  176: DM_ACCOUNT_ARCHIVE  177: DM_ACCOUNT_MAPP  178: DM_CONV_MESSAGES  179: DM_CONVERSATION  180: DM_MASK  181: DM_ELENCO_RICERCHE  182: DM_FIND  183: DM_LINKS_CHANGEUSERTASK_D  184: DM_LINKS_CHANGEUSERTASK  185: DM_TASKS_RIASSEGNA_DETT  186: DM_PROXY  187: DM_VARIABILILINK_SET_DETT  188: DM_VARIABILILINK  189: DM_SIGNCERT_USE  190: DM_WF_SIGNPDFOPTIONS  191: DM_WF_SIGNOBBCOND  192: DM_WF_SIGN  193: DM_WF_OPERAZ_EXEC  194: DM_LAY_DESK_DETAIL  195: DM_DESK_LAYOUT  196: WS_REGOLE  197: WS_CAMPIREGOLAIXCE  198: DM_TASKLAYOUT  199: DM_TASKLAYDETAIL  200: DM_TASKLAYASSOC  202: DM_LICENSE  203: DM_LICENSE_ASSOC  204: DM_LICENSE_MOD_INST  205: DM_DOCTOARCHIVE  206: WS_DOCFROMIX_CONFIGMAP  207: WS_DOCFROMIX_CONFIG  208: WS_DOCFROMIX  209: WS_DOCFROMIX_PROFILI_DETAIL  210: WS_DOCFROMIX_PROFILI  211: DM_WF_FATT_APPROVE  212: DM_BUFFER  213: DM_LICENSE_EXTCLIENT  214: DM_LICENSE_RESOURCE  215: DM_APICALL_VAR  216: DM_APICALL_HEADER  217: DM_APICALL  218: DM_APICALL_RESULTINFO
     *
     * @return $this
     */
    public function setDmCountersTables($dm_counters_tables)
    {
        $this->container['dm_counters_tables'] = $dm_counters_tables;

        return $this;
    }

    /**
     * Gets key_id
     *
     * @return int
     */
    public function getKeyId()
    {
        return $this->container['key_id'];
    }

    /**
     * Sets key_id
     *
     * @param int $key_id key_id
     *
     * @return $this
     */
    public function setKeyId($key_id)
    {
        $this->container['key_id'] = $key_id;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string $filename filename
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

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
     * Gets has_profile
     *
     * @return bool
     */
    public function getHasProfile()
    {
        return $this->container['has_profile'];
    }

    /**
     * Sets has_profile
     *
     * @param bool $has_profile has_profile
     *
     * @return $this
     */
    public function setHasProfile($has_profile)
    {
        $this->container['has_profile'] = $has_profile;

        return $this;
    }

    /**
     * Gets force_sign
     *
     * @return bool
     */
    public function getForceSign()
    {
        return $this->container['force_sign'];
    }

    /**
     * Sets force_sign
     *
     * @param bool $force_sign force_sign
     *
     * @return $this
     */
    public function setForceSign($force_sign)
    {
        $this->container['force_sign'] = $force_sign;

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


