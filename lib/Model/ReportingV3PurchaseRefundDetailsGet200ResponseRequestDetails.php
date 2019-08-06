<?php
/**
 * ReportingV3PurchaseRefundDetailsGet200ResponseRequestDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
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
 * ReportingV3PurchaseRefundDetailsGet200ResponseRequestDetails Class Doc Comment
 *
 * @category    Class
 * @description Request Info Section
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportingV3PurchaseRefundDetailsGet200ResponseRequestDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportingV3PurchaseRefundDetailsGet200Response_requestDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'requestId' => 'string',
        'cybersourceMerchantId' => 'string',
        'processorMerchantId' => 'string',
        'groupName' => 'string',
        'transactionReferenceNumber' => 'string',
        'merchantReferenceNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'requestId' => null,
        'cybersourceMerchantId' => null,
        'processorMerchantId' => null,
        'groupName' => null,
        'transactionReferenceNumber' => null,
        'merchantReferenceNumber' => null
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
        'requestId' => 'requestId',
        'cybersourceMerchantId' => 'cybersourceMerchantId',
        'processorMerchantId' => 'processorMerchantId',
        'groupName' => 'groupName',
        'transactionReferenceNumber' => 'transactionReferenceNumber',
        'merchantReferenceNumber' => 'merchantReferenceNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'requestId' => 'setRequestId',
        'cybersourceMerchantId' => 'setCybersourceMerchantId',
        'processorMerchantId' => 'setProcessorMerchantId',
        'groupName' => 'setGroupName',
        'transactionReferenceNumber' => 'setTransactionReferenceNumber',
        'merchantReferenceNumber' => 'setMerchantReferenceNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'requestId' => 'getRequestId',
        'cybersourceMerchantId' => 'getCybersourceMerchantId',
        'processorMerchantId' => 'getProcessorMerchantId',
        'groupName' => 'getGroupName',
        'transactionReferenceNumber' => 'getTransactionReferenceNumber',
        'merchantReferenceNumber' => 'getMerchantReferenceNumber'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['cybersourceMerchantId'] = isset($data['cybersourceMerchantId']) ? $data['cybersourceMerchantId'] : null;
        $this->container['processorMerchantId'] = isset($data['processorMerchantId']) ? $data['processorMerchantId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['transactionReferenceNumber'] = isset($data['transactionReferenceNumber']) ? $data['transactionReferenceNumber'] : null;
        $this->container['merchantReferenceNumber'] = isset($data['merchantReferenceNumber']) ? $data['merchantReferenceNumber'] : null;
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
     * Gets requestId
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     * @param string $requestId An unique identification number assigned by CyberSource to identify the submitted request.
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;

        return $this;
    }

    /**
     * Gets cybersourceMerchantId
     * @return string
     */
    public function getCybersourceMerchantId()
    {
        return $this->container['cybersourceMerchantId'];
    }

    /**
     * Sets cybersourceMerchantId
     * @param string $cybersourceMerchantId Cybersource Merchant Id
     * @return $this
     */
    public function setCybersourceMerchantId($cybersourceMerchantId)
    {
        $this->container['cybersourceMerchantId'] = $cybersourceMerchantId;

        return $this;
    }

    /**
     * Gets processorMerchantId
     * @return string
     */
    public function getProcessorMerchantId()
    {
        return $this->container['processorMerchantId'];
    }

    /**
     * Sets processorMerchantId
     * @param string $processorMerchantId Cybersource Processor Merchant Id
     * @return $this
     */
    public function setProcessorMerchantId($processorMerchantId)
    {
        $this->container['processorMerchantId'] = $processorMerchantId;

        return $this;
    }

    /**
     * Gets groupName
     * @return string
     */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
     * Sets groupName
     * @param string $groupName Group Name
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;

        return $this;
    }

    /**
     * Gets transactionReferenceNumber
     * @return string
     */
    public function getTransactionReferenceNumber()
    {
        return $this->container['transactionReferenceNumber'];
    }

    /**
     * Sets transactionReferenceNumber
     * @param string $transactionReferenceNumber Transaction Reference Number
     * @return $this
     */
    public function setTransactionReferenceNumber($transactionReferenceNumber)
    {
        $this->container['transactionReferenceNumber'] = $transactionReferenceNumber;

        return $this;
    }

    /**
     * Gets merchantReferenceNumber
     * @return string
     */
    public function getMerchantReferenceNumber()
    {
        return $this->container['merchantReferenceNumber'];
    }

    /**
     * Sets merchantReferenceNumber
     * @param string $merchantReferenceNumber Merchant Reference Number
     * @return $this
     */
    public function setMerchantReferenceNumber($merchantReferenceNumber)
    {
        $this->container['merchantReferenceNumber'] = $merchantReferenceNumber;

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


