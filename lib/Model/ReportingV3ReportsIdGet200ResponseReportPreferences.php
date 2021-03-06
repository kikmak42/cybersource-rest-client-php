<?php
/**
 * ReportingV3ReportsIdGet200ResponseReportPreferences
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
 * ReportingV3ReportsIdGet200ResponseReportPreferences Class Doc Comment
 *
 * @category    Class
 * @description Report Preferences
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportingV3ReportsIdGet200ResponseReportPreferences implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportingV3ReportsIdGet200Response_reportPreferences';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'signedAmounts' => 'bool',
        'fieldNameConvention' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'signedAmounts' => null,
        'fieldNameConvention' => null
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
        'signedAmounts' => 'signedAmounts',
        'fieldNameConvention' => 'fieldNameConvention'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'signedAmounts' => 'setSignedAmounts',
        'fieldNameConvention' => 'setFieldNameConvention'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'signedAmounts' => 'getSignedAmounts',
        'fieldNameConvention' => 'getFieldNameConvention'
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

    const FIELD_NAME_CONVENTION_SOAPI = 'SOAPI';
    const FIELD_NAME_CONVENTION_SCMP = 'SCMP';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFieldNameConventionAllowableValues()
    {
        return [
            self::FIELD_NAME_CONVENTION_SOAPI,
            self::FIELD_NAME_CONVENTION_SCMP,
        ];
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
        $this->container['signedAmounts'] = isset($data['signedAmounts']) ? $data['signedAmounts'] : null;
        $this->container['fieldNameConvention'] = isset($data['fieldNameConvention']) ? $data['fieldNameConvention'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getFieldNameConventionAllowableValues();
        if (!in_array($this->container['fieldNameConvention'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'fieldNameConvention', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        $allowed_values = $this->getFieldNameConventionAllowableValues();
        if (!in_array($this->container['fieldNameConvention'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets signedAmounts
     * @return bool
     */
    public function getSignedAmounts()
    {
        return $this->container['signedAmounts'];
    }

    /**
     * Sets signedAmounts
     * @param bool $signedAmounts Indicator to determine whether negative sign infron of amount for all refunded transaction
     * @return $this
     */
    public function setSignedAmounts($signedAmounts)
    {
        $this->container['signedAmounts'] = $signedAmounts;

        return $this;
    }

    /**
     * Gets fieldNameConvention
     * @return string
     */
    public function getFieldNameConvention()
    {
        return $this->container['fieldNameConvention'];
    }

    /**
     * Sets fieldNameConvention
     * @param string $fieldNameConvention Specify the field naming convention to be followed in reports (applicable to only csv report formats
     * @return $this
     */
    public function setFieldNameConvention($fieldNameConvention)
    {
        $allowed_values = $this->getFieldNameConventionAllowableValues();
        if (!is_null($fieldNameConvention) && !in_array($fieldNameConvention, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fieldNameConvention', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['fieldNameConvention'] = $fieldNameConvention;

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


