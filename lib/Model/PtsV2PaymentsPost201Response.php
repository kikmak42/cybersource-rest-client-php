<?php
/**
 * PtsV2PaymentsPost201Response
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
 * PtsV2PaymentsPost201Response Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201Response implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseLinks',
        'id' => 'string',
        'submitTimeUtc' => 'string',
        'status' => 'string',
        'reconciliationId' => 'string',
        'errorInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformation',
        'clientReferenceInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseClientReferenceInformation',
        'processingInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseProcessingInformation',
        'processorInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformation',
        'issuerInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseIssuerInformation',
        'paymentInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentInformation',
        'orderInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformation',
        'pointOfSaleInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponsePointOfSaleInformation',
        'installmentInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseInstallmentInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'id' => null,
        'submitTimeUtc' => null,
        'status' => null,
        'reconciliationId' => null,
        'errorInformation' => null,
        'clientReferenceInformation' => null,
        'processingInformation' => null,
        'processorInformation' => null,
        'issuerInformation' => null,
        'paymentInformation' => null,
        'orderInformation' => null,
        'pointOfSaleInformation' => null,
        'installmentInformation' => null
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
        'links' => '_links',
        'id' => 'id',
        'submitTimeUtc' => 'submitTimeUtc',
        'status' => 'status',
        'reconciliationId' => 'reconciliationId',
        'errorInformation' => 'errorInformation',
        'clientReferenceInformation' => 'clientReferenceInformation',
        'processingInformation' => 'processingInformation',
        'processorInformation' => 'processorInformation',
        'issuerInformation' => 'issuerInformation',
        'paymentInformation' => 'paymentInformation',
        'orderInformation' => 'orderInformation',
        'pointOfSaleInformation' => 'pointOfSaleInformation',
        'installmentInformation' => 'installmentInformation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'id' => 'setId',
        'submitTimeUtc' => 'setSubmitTimeUtc',
        'status' => 'setStatus',
        'reconciliationId' => 'setReconciliationId',
        'errorInformation' => 'setErrorInformation',
        'clientReferenceInformation' => 'setClientReferenceInformation',
        'processingInformation' => 'setProcessingInformation',
        'processorInformation' => 'setProcessorInformation',
        'issuerInformation' => 'setIssuerInformation',
        'paymentInformation' => 'setPaymentInformation',
        'orderInformation' => 'setOrderInformation',
        'pointOfSaleInformation' => 'setPointOfSaleInformation',
        'installmentInformation' => 'setInstallmentInformation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'id' => 'getId',
        'submitTimeUtc' => 'getSubmitTimeUtc',
        'status' => 'getStatus',
        'reconciliationId' => 'getReconciliationId',
        'errorInformation' => 'getErrorInformation',
        'clientReferenceInformation' => 'getClientReferenceInformation',
        'processingInformation' => 'getProcessingInformation',
        'processorInformation' => 'getProcessorInformation',
        'issuerInformation' => 'getIssuerInformation',
        'paymentInformation' => 'getPaymentInformation',
        'orderInformation' => 'getOrderInformation',
        'pointOfSaleInformation' => 'getPointOfSaleInformation',
        'installmentInformation' => 'getInstallmentInformation'
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

    const STATUS_AUTHORIZED = 'AUTHORIZED';
    const STATUS_PARTIAL_AUTHORIZED = 'PARTIAL_AUTHORIZED';
    const STATUS_AUTHORIZED_PENDING_REVIEW = 'AUTHORIZED_PENDING_REVIEW';
    const STATUS_DECLINED = 'DECLINED';
    const STATUS_INVALID_REQUEST = 'INVALID_REQUEST';
    const STATUS_PENDING = 'PENDING';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AUTHORIZED,
            self::STATUS_PARTIAL_AUTHORIZED,
            self::STATUS_AUTHORIZED_PENDING_REVIEW,
            self::STATUS_DECLINED,
            self::STATUS_INVALID_REQUEST,
            self::STATUS_PENDING,
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['submitTimeUtc'] = isset($data['submitTimeUtc']) ? $data['submitTimeUtc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reconciliationId'] = isset($data['reconciliationId']) ? $data['reconciliationId'] : null;
        $this->container['errorInformation'] = isset($data['errorInformation']) ? $data['errorInformation'] : null;
        $this->container['clientReferenceInformation'] = isset($data['clientReferenceInformation']) ? $data['clientReferenceInformation'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
        $this->container['processorInformation'] = isset($data['processorInformation']) ? $data['processorInformation'] : null;
        $this->container['issuerInformation'] = isset($data['issuerInformation']) ? $data['issuerInformation'] : null;
        $this->container['paymentInformation'] = isset($data['paymentInformation']) ? $data['paymentInformation'] : null;
        $this->container['orderInformation'] = isset($data['orderInformation']) ? $data['orderInformation'] : null;
        $this->container['pointOfSaleInformation'] = isset($data['pointOfSaleInformation']) ? $data['pointOfSaleInformation'] : null;
        $this->container['installmentInformation'] = isset($data['installmentInformation']) ? $data['installmentInformation'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['id']) && (strlen($this->container['id']) > 26)) {
            $invalid_properties[] = "invalid value for 'id', the character length must be smaller than or equal to 26.";
        }

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if (!is_null($this->container['reconciliationId']) && (strlen($this->container['reconciliationId']) > 60)) {
            $invalid_properties[] = "invalid value for 'reconciliationId', the character length must be smaller than or equal to 60.";
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

        if (strlen($this->container['id']) > 26) {
            return false;
        }
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if (strlen($this->container['reconciliationId']) > 60) {
            return false;
        }
        return true;
    }


    /**
     * Gets links
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id An unique identification number assigned by CyberSource to identify the submitted request.
     * @return $this
     */
    public function setId($id)
    {
        if (!is_null($id) && (strlen($id) > 26)) {
            throw new \InvalidArgumentException('invalid length for $id when calling PtsV2PaymentsPost201Response., must be smaller than or equal to 26.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets submitTimeUtc
     * @return string
     */
    public function getSubmitTimeUtc()
    {
        return $this->container['submitTimeUtc'];
    }

    /**
     * Sets submitTimeUtc
     * @param string $submitTimeUtc Time of request in UTC. `Format: YYYY-MM-DDThh:mm:ssZ`  Example 2016-08-11T22:47:57Z equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The T separates the date and the time. The Z indicates UTC.
     * @return $this
     */
    public function setSubmitTimeUtc($submitTimeUtc)
    {
        $this->container['submitTimeUtc'] = $submitTimeUtc;

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
     * @param string $status The status of the submitted transaction.  Possible values:  - AUTHORIZED  - PARTIAL_AUTHORIZED  - AUTHORIZED_PENDING_REVIEW  - DECLINED  - INVALID_REQUEST
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

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
     * @param string $reconciliationId The reconciliation id for the submitted transaction. This value is not returned for all processors.
     * @return $this
     */
    public function setReconciliationId($reconciliationId)
    {
        if (!is_null($reconciliationId) && (strlen($reconciliationId) > 60)) {
            throw new \InvalidArgumentException('invalid length for $reconciliationId when calling PtsV2PaymentsPost201Response., must be smaller than or equal to 60.');
        }

        $this->container['reconciliationId'] = $reconciliationId;

        return $this;
    }

    /**
     * Gets errorInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformation
     */
    public function getErrorInformation()
    {
        return $this->container['errorInformation'];
    }

    /**
     * Sets errorInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformation $errorInformation
     * @return $this
     */
    public function setErrorInformation($errorInformation)
    {
        $this->container['errorInformation'] = $errorInformation;

        return $this;
    }

    /**
     * Gets clientReferenceInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseClientReferenceInformation
     */
    public function getClientReferenceInformation()
    {
        return $this->container['clientReferenceInformation'];
    }

    /**
     * Sets clientReferenceInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseClientReferenceInformation $clientReferenceInformation
     * @return $this
     */
    public function setClientReferenceInformation($clientReferenceInformation)
    {
        $this->container['clientReferenceInformation'] = $clientReferenceInformation;

        return $this;
    }

    /**
     * Gets processingInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessingInformation
     */
    public function getProcessingInformation()
    {
        return $this->container['processingInformation'];
    }

    /**
     * Sets processingInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessingInformation $processingInformation
     * @return $this
     */
    public function setProcessingInformation($processingInformation)
    {
        $this->container['processingInformation'] = $processingInformation;

        return $this;
    }

    /**
     * Gets processorInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformation
     */
    public function getProcessorInformation()
    {
        return $this->container['processorInformation'];
    }

    /**
     * Sets processorInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformation $processorInformation
     * @return $this
     */
    public function setProcessorInformation($processorInformation)
    {
        $this->container['processorInformation'] = $processorInformation;

        return $this;
    }

    /**
     * Gets issuerInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseIssuerInformation
     */
    public function getIssuerInformation()
    {
        return $this->container['issuerInformation'];
    }

    /**
     * Sets issuerInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseIssuerInformation $issuerInformation
     * @return $this
     */
    public function setIssuerInformation($issuerInformation)
    {
        $this->container['issuerInformation'] = $issuerInformation;

        return $this;
    }

    /**
     * Gets paymentInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentInformation
     */
    public function getPaymentInformation()
    {
        return $this->container['paymentInformation'];
    }

    /**
     * Sets paymentInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentInformation $paymentInformation
     * @return $this
     */
    public function setPaymentInformation($paymentInformation)
    {
        $this->container['paymentInformation'] = $paymentInformation;

        return $this;
    }

    /**
     * Gets orderInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformation
     */
    public function getOrderInformation()
    {
        return $this->container['orderInformation'];
    }

    /**
     * Sets orderInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformation $orderInformation
     * @return $this
     */
    public function setOrderInformation($orderInformation)
    {
        $this->container['orderInformation'] = $orderInformation;

        return $this;
    }

    /**
     * Gets pointOfSaleInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponsePointOfSaleInformation
     */
    public function getPointOfSaleInformation()
    {
        return $this->container['pointOfSaleInformation'];
    }

    /**
     * Sets pointOfSaleInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponsePointOfSaleInformation $pointOfSaleInformation
     * @return $this
     */
    public function setPointOfSaleInformation($pointOfSaleInformation)
    {
        $this->container['pointOfSaleInformation'] = $pointOfSaleInformation;

        return $this;
    }

    /**
     * Gets installmentInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseInstallmentInformation
     */
    public function getInstallmentInformation()
    {
        return $this->container['installmentInformation'];
    }

    /**
     * Sets installmentInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseInstallmentInformation $installmentInformation
     * @return $this
     */
    public function setInstallmentInformation($installmentInformation)
    {
        $this->container['installmentInformation'] = $installmentInformation;

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


