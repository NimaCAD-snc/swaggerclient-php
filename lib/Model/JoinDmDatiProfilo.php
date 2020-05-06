<?php
/**
 * JoinDmDatiProfilo
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
 * JoinDmDatiProfilo Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JoinDmDatiProfilo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Join_Dm_DatiProfilo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'legame_tabella' => 'string',
        'id' => '\Swagger\Client\Model\FieldInt',
        'docnumber' => '\Swagger\Client\Model\FieldInt',
        'campo' => '\Swagger\Client\Model\FieldString',
        'valore' => '\Swagger\Client\Model\FieldString',
        'contatti' => '\Swagger\Client\Model\FieldString',
        'fax' => '\Swagger\Client\Model\FieldString',
        'tel' => '\Swagger\Client\Model\FieldString',
        'indirizzo' => '\Swagger\Client\Model\FieldString',
        'mail' => '\Swagger\Client\Model\FieldString',
        'localita' => '\Swagger\Client\Model\FieldString',
        'cap' => '\Swagger\Client\Model\FieldString',
        'provincia' => '\Swagger\Client\Model\FieldString',
        'nazione' => '\Swagger\Client\Model\FieldString',
        'codice' => '\Swagger\Client\Model\FieldString',
        'contatto' => '\Swagger\Client\Model\FieldString',
        'mansione' => '\Swagger\Client\Model\FieldString',
        'telnome' => '\Swagger\Client\Model\FieldString',
        'faxnome' => '\Swagger\Client\Model\FieldString',
        'cell' => '\Swagger\Client\Model\FieldString',
        'abitazione' => '\Swagger\Client\Model\FieldString',
        'reparto' => '\Swagger\Client\Model\FieldString',
        'ufficio' => '\Swagger\Client\Model\FieldString',
        'email' => '\Swagger\Client\Model\FieldString',
        'riferimento' => '\Swagger\Client\Model\FieldString',
        'codfis' => '\Swagger\Client\Model\FieldString',
        'partiva' => '\Swagger\Client\Model\FieldString',
        'priorita' => '\Swagger\Client\Model\FieldString',
        'idrubrica' => '\Swagger\Client\Model\FieldInt',
        'idcontatto' => '\Swagger\Client\Model\FieldInt',
        'force_case_insensitive' => 'bool',
        'join_mode' => 'int',
        'nome_tabella' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'legame_tabella' => null,
        'id' => null,
        'docnumber' => null,
        'campo' => null,
        'valore' => null,
        'contatti' => null,
        'fax' => null,
        'tel' => null,
        'indirizzo' => null,
        'mail' => null,
        'localita' => null,
        'cap' => null,
        'provincia' => null,
        'nazione' => null,
        'codice' => null,
        'contatto' => null,
        'mansione' => null,
        'telnome' => null,
        'faxnome' => null,
        'cell' => null,
        'abitazione' => null,
        'reparto' => null,
        'ufficio' => null,
        'email' => null,
        'riferimento' => null,
        'codfis' => null,
        'partiva' => null,
        'priorita' => null,
        'idrubrica' => null,
        'idcontatto' => null,
        'force_case_insensitive' => null,
        'join_mode' => 'int32',
        'nome_tabella' => null
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
        'legame_tabella' => 'legameTabella',
        'id' => 'id',
        'docnumber' => 'docnumber',
        'campo' => 'campo',
        'valore' => 'valore',
        'contatti' => 'contatti',
        'fax' => 'fax',
        'tel' => 'tel',
        'indirizzo' => 'indirizzo',
        'mail' => 'mail',
        'localita' => 'localita',
        'cap' => 'cap',
        'provincia' => 'provincia',
        'nazione' => 'nazione',
        'codice' => 'codice',
        'contatto' => 'contatto',
        'mansione' => 'mansione',
        'telnome' => 'telnome',
        'faxnome' => 'faxnome',
        'cell' => 'cell',
        'abitazione' => 'abitazione',
        'reparto' => 'reparto',
        'ufficio' => 'ufficio',
        'email' => 'email',
        'riferimento' => 'riferimento',
        'codfis' => 'codfis',
        'partiva' => 'partiva',
        'priorita' => 'priorita',
        'idrubrica' => 'idrubrica',
        'idcontatto' => 'idcontatto',
        'force_case_insensitive' => 'forceCaseInsensitive',
        'join_mode' => 'joinMode',
        'nome_tabella' => 'nomeTabella'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'legame_tabella' => 'setLegameTabella',
        'id' => 'setId',
        'docnumber' => 'setDocnumber',
        'campo' => 'setCampo',
        'valore' => 'setValore',
        'contatti' => 'setContatti',
        'fax' => 'setFax',
        'tel' => 'setTel',
        'indirizzo' => 'setIndirizzo',
        'mail' => 'setMail',
        'localita' => 'setLocalita',
        'cap' => 'setCap',
        'provincia' => 'setProvincia',
        'nazione' => 'setNazione',
        'codice' => 'setCodice',
        'contatto' => 'setContatto',
        'mansione' => 'setMansione',
        'telnome' => 'setTelnome',
        'faxnome' => 'setFaxnome',
        'cell' => 'setCell',
        'abitazione' => 'setAbitazione',
        'reparto' => 'setReparto',
        'ufficio' => 'setUfficio',
        'email' => 'setEmail',
        'riferimento' => 'setRiferimento',
        'codfis' => 'setCodfis',
        'partiva' => 'setPartiva',
        'priorita' => 'setPriorita',
        'idrubrica' => 'setIdrubrica',
        'idcontatto' => 'setIdcontatto',
        'force_case_insensitive' => 'setForceCaseInsensitive',
        'join_mode' => 'setJoinMode',
        'nome_tabella' => 'setNomeTabella'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'legame_tabella' => 'getLegameTabella',
        'id' => 'getId',
        'docnumber' => 'getDocnumber',
        'campo' => 'getCampo',
        'valore' => 'getValore',
        'contatti' => 'getContatti',
        'fax' => 'getFax',
        'tel' => 'getTel',
        'indirizzo' => 'getIndirizzo',
        'mail' => 'getMail',
        'localita' => 'getLocalita',
        'cap' => 'getCap',
        'provincia' => 'getProvincia',
        'nazione' => 'getNazione',
        'codice' => 'getCodice',
        'contatto' => 'getContatto',
        'mansione' => 'getMansione',
        'telnome' => 'getTelnome',
        'faxnome' => 'getFaxnome',
        'cell' => 'getCell',
        'abitazione' => 'getAbitazione',
        'reparto' => 'getReparto',
        'ufficio' => 'getUfficio',
        'email' => 'getEmail',
        'riferimento' => 'getRiferimento',
        'codfis' => 'getCodfis',
        'partiva' => 'getPartiva',
        'priorita' => 'getPriorita',
        'idrubrica' => 'getIdrubrica',
        'idcontatto' => 'getIdcontatto',
        'force_case_insensitive' => 'getForceCaseInsensitive',
        'join_mode' => 'getJoinMode',
        'nome_tabella' => 'getNomeTabella'
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
        $this->container['legame_tabella'] = isset($data['legame_tabella']) ? $data['legame_tabella'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['docnumber'] = isset($data['docnumber']) ? $data['docnumber'] : null;
        $this->container['campo'] = isset($data['campo']) ? $data['campo'] : null;
        $this->container['valore'] = isset($data['valore']) ? $data['valore'] : null;
        $this->container['contatti'] = isset($data['contatti']) ? $data['contatti'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['tel'] = isset($data['tel']) ? $data['tel'] : null;
        $this->container['indirizzo'] = isset($data['indirizzo']) ? $data['indirizzo'] : null;
        $this->container['mail'] = isset($data['mail']) ? $data['mail'] : null;
        $this->container['localita'] = isset($data['localita']) ? $data['localita'] : null;
        $this->container['cap'] = isset($data['cap']) ? $data['cap'] : null;
        $this->container['provincia'] = isset($data['provincia']) ? $data['provincia'] : null;
        $this->container['nazione'] = isset($data['nazione']) ? $data['nazione'] : null;
        $this->container['codice'] = isset($data['codice']) ? $data['codice'] : null;
        $this->container['contatto'] = isset($data['contatto']) ? $data['contatto'] : null;
        $this->container['mansione'] = isset($data['mansione']) ? $data['mansione'] : null;
        $this->container['telnome'] = isset($data['telnome']) ? $data['telnome'] : null;
        $this->container['faxnome'] = isset($data['faxnome']) ? $data['faxnome'] : null;
        $this->container['cell'] = isset($data['cell']) ? $data['cell'] : null;
        $this->container['abitazione'] = isset($data['abitazione']) ? $data['abitazione'] : null;
        $this->container['reparto'] = isset($data['reparto']) ? $data['reparto'] : null;
        $this->container['ufficio'] = isset($data['ufficio']) ? $data['ufficio'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['riferimento'] = isset($data['riferimento']) ? $data['riferimento'] : null;
        $this->container['codfis'] = isset($data['codfis']) ? $data['codfis'] : null;
        $this->container['partiva'] = isset($data['partiva']) ? $data['partiva'] : null;
        $this->container['priorita'] = isset($data['priorita']) ? $data['priorita'] : null;
        $this->container['idrubrica'] = isset($data['idrubrica']) ? $data['idrubrica'] : null;
        $this->container['idcontatto'] = isset($data['idcontatto']) ? $data['idcontatto'] : null;
        $this->container['force_case_insensitive'] = isset($data['force_case_insensitive']) ? $data['force_case_insensitive'] : null;
        $this->container['join_mode'] = isset($data['join_mode']) ? $data['join_mode'] : null;
        $this->container['nome_tabella'] = isset($data['nome_tabella']) ? $data['nome_tabella'] : null;
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
     * Gets legame_tabella
     *
     * @return string
     */
    public function getLegameTabella()
    {
        return $this->container['legame_tabella'];
    }

    /**
     * Sets legame_tabella
     *
     * @param string $legame_tabella legame_tabella
     *
     * @return $this
     */
    public function setLegameTabella($legame_tabella)
    {
        $this->container['legame_tabella'] = $legame_tabella;

        return $this;
    }

    /**
     * Gets id
     *
     * @return \Swagger\Client\Model\FieldInt
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \Swagger\Client\Model\FieldInt $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets docnumber
     *
     * @return \Swagger\Client\Model\FieldInt
     */
    public function getDocnumber()
    {
        return $this->container['docnumber'];
    }

    /**
     * Sets docnumber
     *
     * @param \Swagger\Client\Model\FieldInt $docnumber docnumber
     *
     * @return $this
     */
    public function setDocnumber($docnumber)
    {
        $this->container['docnumber'] = $docnumber;

        return $this;
    }

    /**
     * Gets campo
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getCampo()
    {
        return $this->container['campo'];
    }

    /**
     * Sets campo
     *
     * @param \Swagger\Client\Model\FieldString $campo campo
     *
     * @return $this
     */
    public function setCampo($campo)
    {
        $this->container['campo'] = $campo;

        return $this;
    }

    /**
     * Gets valore
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getValore()
    {
        return $this->container['valore'];
    }

    /**
     * Sets valore
     *
     * @param \Swagger\Client\Model\FieldString $valore valore
     *
     * @return $this
     */
    public function setValore($valore)
    {
        $this->container['valore'] = $valore;

        return $this;
    }

    /**
     * Gets contatti
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getContatti()
    {
        return $this->container['contatti'];
    }

    /**
     * Sets contatti
     *
     * @param \Swagger\Client\Model\FieldString $contatti contatti
     *
     * @return $this
     */
    public function setContatti($contatti)
    {
        $this->container['contatti'] = $contatti;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param \Swagger\Client\Model\FieldString $fax fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets tel
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getTel()
    {
        return $this->container['tel'];
    }

    /**
     * Sets tel
     *
     * @param \Swagger\Client\Model\FieldString $tel tel
     *
     * @return $this
     */
    public function setTel($tel)
    {
        $this->container['tel'] = $tel;

        return $this;
    }

    /**
     * Gets indirizzo
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getIndirizzo()
    {
        return $this->container['indirizzo'];
    }

    /**
     * Sets indirizzo
     *
     * @param \Swagger\Client\Model\FieldString $indirizzo indirizzo
     *
     * @return $this
     */
    public function setIndirizzo($indirizzo)
    {
        $this->container['indirizzo'] = $indirizzo;

        return $this;
    }

    /**
     * Gets mail
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getMail()
    {
        return $this->container['mail'];
    }

    /**
     * Sets mail
     *
     * @param \Swagger\Client\Model\FieldString $mail mail
     *
     * @return $this
     */
    public function setMail($mail)
    {
        $this->container['mail'] = $mail;

        return $this;
    }

    /**
     * Gets localita
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getLocalita()
    {
        return $this->container['localita'];
    }

    /**
     * Sets localita
     *
     * @param \Swagger\Client\Model\FieldString $localita localita
     *
     * @return $this
     */
    public function setLocalita($localita)
    {
        $this->container['localita'] = $localita;

        return $this;
    }

    /**
     * Gets cap
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getCap()
    {
        return $this->container['cap'];
    }

    /**
     * Sets cap
     *
     * @param \Swagger\Client\Model\FieldString $cap cap
     *
     * @return $this
     */
    public function setCap($cap)
    {
        $this->container['cap'] = $cap;

        return $this;
    }

    /**
     * Gets provincia
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getProvincia()
    {
        return $this->container['provincia'];
    }

    /**
     * Sets provincia
     *
     * @param \Swagger\Client\Model\FieldString $provincia provincia
     *
     * @return $this
     */
    public function setProvincia($provincia)
    {
        $this->container['provincia'] = $provincia;

        return $this;
    }

    /**
     * Gets nazione
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getNazione()
    {
        return $this->container['nazione'];
    }

    /**
     * Sets nazione
     *
     * @param \Swagger\Client\Model\FieldString $nazione nazione
     *
     * @return $this
     */
    public function setNazione($nazione)
    {
        $this->container['nazione'] = $nazione;

        return $this;
    }

    /**
     * Gets codice
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getCodice()
    {
        return $this->container['codice'];
    }

    /**
     * Sets codice
     *
     * @param \Swagger\Client\Model\FieldString $codice codice
     *
     * @return $this
     */
    public function setCodice($codice)
    {
        $this->container['codice'] = $codice;

        return $this;
    }

    /**
     * Gets contatto
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getContatto()
    {
        return $this->container['contatto'];
    }

    /**
     * Sets contatto
     *
     * @param \Swagger\Client\Model\FieldString $contatto contatto
     *
     * @return $this
     */
    public function setContatto($contatto)
    {
        $this->container['contatto'] = $contatto;

        return $this;
    }

    /**
     * Gets mansione
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getMansione()
    {
        return $this->container['mansione'];
    }

    /**
     * Sets mansione
     *
     * @param \Swagger\Client\Model\FieldString $mansione mansione
     *
     * @return $this
     */
    public function setMansione($mansione)
    {
        $this->container['mansione'] = $mansione;

        return $this;
    }

    /**
     * Gets telnome
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getTelnome()
    {
        return $this->container['telnome'];
    }

    /**
     * Sets telnome
     *
     * @param \Swagger\Client\Model\FieldString $telnome telnome
     *
     * @return $this
     */
    public function setTelnome($telnome)
    {
        $this->container['telnome'] = $telnome;

        return $this;
    }

    /**
     * Gets faxnome
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getFaxnome()
    {
        return $this->container['faxnome'];
    }

    /**
     * Sets faxnome
     *
     * @param \Swagger\Client\Model\FieldString $faxnome faxnome
     *
     * @return $this
     */
    public function setFaxnome($faxnome)
    {
        $this->container['faxnome'] = $faxnome;

        return $this;
    }

    /**
     * Gets cell
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getCell()
    {
        return $this->container['cell'];
    }

    /**
     * Sets cell
     *
     * @param \Swagger\Client\Model\FieldString $cell cell
     *
     * @return $this
     */
    public function setCell($cell)
    {
        $this->container['cell'] = $cell;

        return $this;
    }

    /**
     * Gets abitazione
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getAbitazione()
    {
        return $this->container['abitazione'];
    }

    /**
     * Sets abitazione
     *
     * @param \Swagger\Client\Model\FieldString $abitazione abitazione
     *
     * @return $this
     */
    public function setAbitazione($abitazione)
    {
        $this->container['abitazione'] = $abitazione;

        return $this;
    }

    /**
     * Gets reparto
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getReparto()
    {
        return $this->container['reparto'];
    }

    /**
     * Sets reparto
     *
     * @param \Swagger\Client\Model\FieldString $reparto reparto
     *
     * @return $this
     */
    public function setReparto($reparto)
    {
        $this->container['reparto'] = $reparto;

        return $this;
    }

    /**
     * Gets ufficio
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getUfficio()
    {
        return $this->container['ufficio'];
    }

    /**
     * Sets ufficio
     *
     * @param \Swagger\Client\Model\FieldString $ufficio ufficio
     *
     * @return $this
     */
    public function setUfficio($ufficio)
    {
        $this->container['ufficio'] = $ufficio;

        return $this;
    }

    /**
     * Gets email
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param \Swagger\Client\Model\FieldString $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets riferimento
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getRiferimento()
    {
        return $this->container['riferimento'];
    }

    /**
     * Sets riferimento
     *
     * @param \Swagger\Client\Model\FieldString $riferimento riferimento
     *
     * @return $this
     */
    public function setRiferimento($riferimento)
    {
        $this->container['riferimento'] = $riferimento;

        return $this;
    }

    /**
     * Gets codfis
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getCodfis()
    {
        return $this->container['codfis'];
    }

    /**
     * Sets codfis
     *
     * @param \Swagger\Client\Model\FieldString $codfis codfis
     *
     * @return $this
     */
    public function setCodfis($codfis)
    {
        $this->container['codfis'] = $codfis;

        return $this;
    }

    /**
     * Gets partiva
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getPartiva()
    {
        return $this->container['partiva'];
    }

    /**
     * Sets partiva
     *
     * @param \Swagger\Client\Model\FieldString $partiva partiva
     *
     * @return $this
     */
    public function setPartiva($partiva)
    {
        $this->container['partiva'] = $partiva;

        return $this;
    }

    /**
     * Gets priorita
     *
     * @return \Swagger\Client\Model\FieldString
     */
    public function getPriorita()
    {
        return $this->container['priorita'];
    }

    /**
     * Sets priorita
     *
     * @param \Swagger\Client\Model\FieldString $priorita priorita
     *
     * @return $this
     */
    public function setPriorita($priorita)
    {
        $this->container['priorita'] = $priorita;

        return $this;
    }

    /**
     * Gets idrubrica
     *
     * @return \Swagger\Client\Model\FieldInt
     */
    public function getIdrubrica()
    {
        return $this->container['idrubrica'];
    }

    /**
     * Sets idrubrica
     *
     * @param \Swagger\Client\Model\FieldInt $idrubrica idrubrica
     *
     * @return $this
     */
    public function setIdrubrica($idrubrica)
    {
        $this->container['idrubrica'] = $idrubrica;

        return $this;
    }

    /**
     * Gets idcontatto
     *
     * @return \Swagger\Client\Model\FieldInt
     */
    public function getIdcontatto()
    {
        return $this->container['idcontatto'];
    }

    /**
     * Sets idcontatto
     *
     * @param \Swagger\Client\Model\FieldInt $idcontatto idcontatto
     *
     * @return $this
     */
    public function setIdcontatto($idcontatto)
    {
        $this->container['idcontatto'] = $idcontatto;

        return $this;
    }

    /**
     * Gets force_case_insensitive
     *
     * @return bool
     */
    public function getForceCaseInsensitive()
    {
        return $this->container['force_case_insensitive'];
    }

    /**
     * Sets force_case_insensitive
     *
     * @param bool $force_case_insensitive force_case_insensitive
     *
     * @return $this
     */
    public function setForceCaseInsensitive($force_case_insensitive)
    {
        $this->container['force_case_insensitive'] = $force_case_insensitive;

        return $this;
    }

    /**
     * Gets join_mode
     *
     * @return int
     */
    public function getJoinMode()
    {
        return $this->container['join_mode'];
    }

    /**
     * Sets join_mode
     *
     * @param int $join_mode Possible values:  0: INNER  1: LEFT  2: RIGHT
     *
     * @return $this
     */
    public function setJoinMode($join_mode)
    {
        $this->container['join_mode'] = $join_mode;

        return $this;
    }

    /**
     * Gets nome_tabella
     *
     * @return string
     */
    public function getNomeTabella()
    {
        return $this->container['nome_tabella'];
    }

    /**
     * Sets nome_tabella
     *
     * @param string $nome_tabella nome_tabella
     *
     * @return $this
     */
    public function setNomeTabella($nome_tabella)
    {
        $this->container['nome_tabella'] = $nome_tabella;

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

