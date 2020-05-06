<?php
/**
 * MaskDetailDTO
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
 * MaskDetailDTO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MaskDetailDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MaskDetailDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'mask_id' => 'string',
        'field_name' => 'string',
        'label' => 'string',
        'order' => 'int',
        'read_only' => 'bool',
        'required' => 'bool',
        'detail_kind' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'mask_id' => null,
        'field_name' => null,
        'label' => null,
        'order' => 'int32',
        'read_only' => null,
        'required' => null,
        'detail_kind' => 'int32'
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
        'mask_id' => 'maskId',
        'field_name' => 'fieldName',
        'label' => 'label',
        'order' => 'order',
        'read_only' => 'readOnly',
        'required' => 'required',
        'detail_kind' => 'detailKind'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'mask_id' => 'setMaskId',
        'field_name' => 'setFieldName',
        'label' => 'setLabel',
        'order' => 'setOrder',
        'read_only' => 'setReadOnly',
        'required' => 'setRequired',
        'detail_kind' => 'setDetailKind'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'mask_id' => 'getMaskId',
        'field_name' => 'getFieldName',
        'label' => 'getLabel',
        'order' => 'getOrder',
        'read_only' => 'getReadOnly',
        'required' => 'getRequired',
        'detail_kind' => 'getDetailKind'
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
        $this->container['mask_id'] = isset($data['mask_id']) ? $data['mask_id'] : null;
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['read_only'] = isset($data['read_only']) ? $data['read_only'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['detail_kind'] = isset($data['detail_kind']) ? $data['detail_kind'] : null;
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Detail Identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets mask_id
     *
     * @return string
     */
    public function getMaskId()
    {
        return $this->container['mask_id'];
    }

    /**
     * Sets mask_id
     *
     * @param string $mask_id Mask Identifier
     *
     * @return $this
     */
    public function setMaskId($mask_id)
    {
        $this->container['mask_id'] = $mask_id;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string $field_name Name of the field.
     *
     * @return $this
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order Mask detail order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets read_only
     *
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->container['read_only'];
    }

    /**
     * Sets read_only
     *
     * @param bool $read_only Read Only
     *
     * @return $this
     */
    public function setReadOnly($read_only)
    {
        $this->container['read_only'] = $read_only;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required Required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets detail_kind
     *
     * @return int
     */
    public function getDetailKind()
    {
        return $this->container['detail_kind'];
    }

    /**
     * Sets detail_kind
     *
     * @param int $detail_kind Possible values:  0: NonImpostato  1: From  2: To  3: Cc  4: Aoo  5: DocumentType  6: DataDoc  7: Numero  8: Oggetto  9: Origine  10: Stato  11: Pratiche  12: Scadenza  13: Importante  14: AbilitaWeb  15: AvviaWorkFlow  16: InviaPerFax  17: InviaPerMail  18: AllegaATaskAttivo  19: InserisciInAssociazione  20: InserisciInFascicolo  21: InserisciInRelazioneManuale  22: GestisciRevisioni  23: Note  24: Allegati  25: Aggiuntivo  26: File  27: Scanner  28: Barcode  29: SicurezzaSingoloDocumento  30: ExternalId  31: AllegaMemo  32: Senders  33: AvviaCollaboration  34: ScansioneImmediata  35: NegaCommuta  36: From_Cap  37: From_Cell  38: From_Codfis  39: From_Codice  40: From_Contatti  41: From_Email  42: From_Fax  43: From_Faxnome  44: From_Indirizzo  45: From_Localita  46: From_Mail  47: From_Mansione  48: From_Nazione  49: From_Partiva  50: From_Provincia  51: From_Reparto  52: From_Riferimento  53: From_Tel  54: From_Telnome  55: From_Ufficio  56: From_Valore  57: From_Abitazione  58: To_Cap  59: To_Cell  60: To_Codfis  61: To_Codice  62: To_Contatti  63: To_Email  64: To_Fax  65: To_Faxnome  66: To_Indirizzo  67: To_Localita  68: To_Mail  69: To_Mansione  70: To_Nazione  71: To_Partiva  72: To_Provincia  73: To_Reparto  74: To_Riferimento  75: To_Tel  76: To_Telnome  77: To_Ufficio  78: To_Valore  79: To_Abitazione  80: Cc_Cap  81: Cc_Cell  82: Cc_Codfis  83: Cc_Codice  84: Cc_Contatti  85: Cc_Email  86: Cc_Fax  87: Cc_Faxnome  88: Cc_Indirizzo  89: Cc_Localita  90: Cc_Mail  91: Cc_Mansione  92: Cc_Nazione  93: Cc_Partiva  94: Cc_Provincia  95: Cc_Reparto  96: Cc_Riferimento  97: Cc_Tel  98: Cc_Telnome  99: Cc_Ufficio  100: Cc_Valore  101: Cc_Abitazione  102: Senders_Cap  103: Senders_Cell  104: Senders_Codfis  105: Senders_Codice  106: Senders_Contatti  107: Senders_Email  108: Senders_Fax  109: Senders_Faxnome  110: Senders_Indirizzo  111: Senders_Localita  112: Senders_Mail  113: Senders_Mansione  114: Senders_Nazione  115: Senders_Partiva  116: Senders_Provincia  117: Senders_Reparto  118: Senders_Riferimento  119: Senders_Tel  120: Senders_Telnome  121: Senders_Ufficio  122: Senders_Valore  123: Senders_Abitazione  124: From_Priorita  125: To_Priorita  126: Cc_Priorita  127: Senders_Priorita
     *
     * @return $this
     */
    public function setDetailKind($detail_kind)
    {
        $this->container['detail_kind'] = $detail_kind;

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


