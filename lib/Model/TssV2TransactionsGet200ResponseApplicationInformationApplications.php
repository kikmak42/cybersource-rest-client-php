<?php
/**
 * TssV2TransactionsGet200ResponseApplicationInformationApplications
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
 * TssV2TransactionsGet200ResponseApplicationInformationApplications Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponseApplicationInformationApplications implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_applicationInformation_applications';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'status' => 'string',
        'reasonCode' => 'string',
        'rCode' => 'string',
        'rFlag' => 'string',
        'reconciliationId' => 'string',
        'rMessage' => 'string',
        'returnCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'status' => null,
        'reasonCode' => null,
        'rCode' => null,
        'rFlag' => null,
        'reconciliationId' => null,
        'rMessage' => null,
        'returnCode' => null
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
        'name' => 'name',
        'status' => 'status',
        'reasonCode' => 'reasonCode',
        'rCode' => 'rCode',
        'rFlag' => 'rFlag',
        'reconciliationId' => 'reconciliationId',
        'rMessage' => 'rMessage',
        'returnCode' => 'returnCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'status' => 'setStatus',
        'reasonCode' => 'setReasonCode',
        'rCode' => 'setRCode',
        'rFlag' => 'setRFlag',
        'reconciliationId' => 'setReconciliationId',
        'rMessage' => 'setRMessage',
        'returnCode' => 'setReturnCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'status' => 'getStatus',
        'reasonCode' => 'getReasonCode',
        'rCode' => 'getRCode',
        'rFlag' => 'getRFlag',
        'reconciliationId' => 'getReconciliationId',
        'rMessage' => 'getRMessage',
        'returnCode' => 'getReturnCode'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reasonCode'] = isset($data['reasonCode']) ? $data['reasonCode'] : null;
        $this->container['rCode'] = isset($data['rCode']) ? $data['rCode'] : null;
        $this->container['rFlag'] = isset($data['rFlag']) ? $data['rFlag'] : null;
        $this->container['reconciliationId'] = isset($data['reconciliationId']) ? $data['reconciliationId'] : null;
        $this->container['rMessage'] = isset($data['rMessage']) ? $data['rMessage'] : null;
        $this->container['returnCode'] = isset($data['returnCode']) ? $data['returnCode'] : null;
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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The CyberSource payment application processed for the transaction.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The description for this field is not available.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets reasonCode
     * @return string
     */
    public function getReasonCode()
    {
        return $this->container['reasonCode'];
    }

    /**
     * Sets reasonCode
     * @param string $reasonCode 3-digit reason code that indicates why the customer profile payment succeeded or failed.
     * @return $this
     */
    public function setReasonCode($reasonCode)
    {
        $this->container['reasonCode'] = $reasonCode;

        return $this;
    }

    /**
     * Gets rCode
     * @return string
     */
    public function getRCode()
    {
        return $this->container['rCode'];
    }

    /**
     * Sets rCode
     * @param string $rCode Indicates whether the service request was successful. Possible values:  - `-1`: An error occurred. - `0`: The request was declined. - `1`: The request was successful.
     * @return $this
     */
    public function setRCode($rCode)
    {
        $this->container['rCode'] = $rCode;

        return $this;
    }

    /**
     * Gets rFlag
     * @return string
     */
    public function getRFlag()
    {
        return $this->container['rFlag'];
    }

    /**
     * Sets rFlag
     * @param string $rFlag One-word description of the result of the application.
     * @return $this
     */
    public function setRFlag($rFlag)
    {
        $this->container['rFlag'] = $rFlag;

        return $this;
    }

    /**
     * Gets reconciliationId
     * @return string
     */
    public function getReconciliationId()
    {
        return $this->container['reconciliationId'];
    }

    /**
     * Sets reconciliationId
     * @param string $reconciliationId Reference number that you use to reconcile your CyberSource reports with your processor reports.
     * @return $this
     */
    public function setReconciliationId($reconciliationId)
    {
        $this->container['reconciliationId'] = $reconciliationId;

        return $this;
    }

    /**
     * Gets rMessage
     * @return string
     */
    public function getRMessage()
    {
        return $this->container['rMessage'];
    }

    /**
     * Sets rMessage
     * @param string $rMessage Message that explains the reply flag for the application.
     * @return $this
     */
    public function setRMessage($rMessage)
    {
        $this->container['rMessage'] = $rMessage;

        return $this;
    }

    /**
     * Gets returnCode
     * @return string
     */
    public function getReturnCode()
    {
        return $this->container['returnCode'];
    }

    /**
     * Sets returnCode
     * @param string $returnCode The description for this field is not available.
     * @return $this
     */
    public function setReturnCode($returnCode)
    {
        $this->container['returnCode'] = $returnCode;

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


