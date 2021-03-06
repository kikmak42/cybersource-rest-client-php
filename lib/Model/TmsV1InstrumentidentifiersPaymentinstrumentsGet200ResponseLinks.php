<?php
/**
 * TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinks
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinks Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinks implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tmsV1InstrumentidentifiersPaymentinstrumentsGet200Response__links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'self' => '\CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksSelf',
        'first' => '\CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksFirst',
        'prev' => '\CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksPrev',
        'next' => '\CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksNext',
        'last' => '\CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksLast'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'self' => null,
        'first' => null,
        'prev' => null,
        'next' => null,
        'last' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'self' => 'self',
        'first' => 'first',
        'prev' => 'prev',
        'next' => 'next',
        'last' => 'last'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'self' => 'setSelf',
        'first' => 'setFirst',
        'prev' => 'setPrev',
        'next' => 'setNext',
        'last' => 'setLast'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'self' => 'getSelf',
        'first' => 'getFirst',
        'prev' => 'getPrev',
        'next' => 'getNext',
        'last' => 'getLast'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['first'] = isset($data['first']) ? $data['first'] : null;
        $this->container['prev'] = isset($data['prev']) ? $data['prev'] : null;
        $this->container['next'] = isset($data['next']) ? $data['next'] : null;
        $this->container['last'] = isset($data['last']) ? $data['last'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets self
     * @return \CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksSelf
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     * @param \CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksSelf $self
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets first
     * @return \CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksFirst
     */
    public function getFirst()
    {
        return $this->container['first'];
    }

    /**
     * Sets first
     * @param \CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksFirst $first
     * @return $this
     */
    public function setFirst($first)
    {
        $this->container['first'] = $first;

        return $this;
    }

    /**
     * Gets prev
     * @return \CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksPrev
     */
    public function getPrev()
    {
        return $this->container['prev'];
    }

    /**
     * Sets prev
     * @param \CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksPrev $prev
     * @return $this
     */
    public function setPrev($prev)
    {
        $this->container['prev'] = $prev;

        return $this;
    }

    /**
     * Gets next
     * @return \CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksNext
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     * @param \CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksNext $next
     * @return $this
     */
    public function setNext($next)
    {
        $this->container['next'] = $next;

        return $this;
    }

    /**
     * Gets last
     * @return \CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksLast
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     * @param \CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200ResponseLinksLast $last
     * @return $this
     */
    public function setLast($last)
    {
        $this->container['last'] = $last;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


