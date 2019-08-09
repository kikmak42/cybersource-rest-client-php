<?php
/**
 * PtsV2PaymentsPost201ResponseProcessingInformationBankTransferOptions
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
 * PtsV2PaymentsPost201ResponseProcessingInformationBankTransferOptions Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseProcessingInformationBankTransferOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_processingInformation_bankTransferOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'settlementMethod' => 'string',
        'fraudScreeningLevel' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'settlementMethod' => null,
        'fraudScreeningLevel' => null
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
        'settlementMethod' => 'settlementMethod',
        'fraudScreeningLevel' => 'fraudScreeningLevel'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'settlementMethod' => 'setSettlementMethod',
        'fraudScreeningLevel' => 'setFraudScreeningLevel'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'settlementMethod' => 'getSettlementMethod',
        'fraudScreeningLevel' => 'getFraudScreeningLevel'
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
        $this->container['settlementMethod'] = isset($data['settlementMethod']) ? $data['settlementMethod'] : null;
        $this->container['fraudScreeningLevel'] = isset($data['fraudScreeningLevel']) ? $data['fraudScreeningLevel'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['settlementMethod']) && (strlen($this->container['settlementMethod']) > 1)) {
            $invalid_properties[] = "invalid value for 'settlementMethod', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['fraudScreeningLevel']) && (strlen($this->container['fraudScreeningLevel']) > 1)) {
            $invalid_properties[] = "invalid value for 'fraudScreeningLevel', the character length must be smaller than or equal to 1.";
        }

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

        if (strlen($this->container['settlementMethod']) > 1) {
            return false;
        }
        if (strlen($this->container['fraudScreeningLevel']) > 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets settlementMethod
     * @return string
     */
    public function getSettlementMethod()
    {
        return $this->container['settlementMethod'];
    }

    /**
     * Sets settlementMethod
     * @param string $settlementMethod Method used for settlement.  Possible values: - `A`: Automated Clearing House (default for credits and for transactions using Canadian dollars) - `F`: Facsimile draft (U.S. dollars only) - `B`: Best possible (U.S. dollars only) (default if the field has not already been configured for your merchant ID)  For details, see `ecp_settlement_method` field description for credit cars and `ecp_debit_settlement_method` for debit cards in the [Electronic Check Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/EChecks_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setSettlementMethod($settlementMethod)
    {
        if (!is_null($settlementMethod) && (strlen($settlementMethod) > 1)) {
            throw new \InvalidArgumentException('invalid length for $settlementMethod when calling PtsV2PaymentsPost201ResponseProcessingInformationBankTransferOptions., must be smaller than or equal to 1.');
        }

        $this->container['settlementMethod'] = $settlementMethod;

        return $this;
    }

    /**
     * Gets fraudScreeningLevel
     * @return string
     */
    public function getFraudScreeningLevel()
    {
        return $this->container['fraudScreeningLevel'];
    }

    /**
     * Sets fraudScreeningLevel
     * @param string $fraudScreeningLevel Level of fraud screening.  Possible values: - `1`: Validation — default if the field has not already been configured for your merchant ID - `2`: Verification  For a description of this feature and a list of supported processors, see \"Verification and Validation\" in the [Electronic Check Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/EChecks_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm).
     * @return $this
     */
    public function setFraudScreeningLevel($fraudScreeningLevel)
    {
        if (!is_null($fraudScreeningLevel) && (strlen($fraudScreeningLevel) > 1)) {
            throw new \InvalidArgumentException('invalid length for $fraudScreeningLevel when calling PtsV2PaymentsPost201ResponseProcessingInformationBankTransferOptions., must be smaller than or equal to 1.');
        }

        $this->container['fraudScreeningLevel'] = $fraudScreeningLevel;

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


