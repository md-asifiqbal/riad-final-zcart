<?php
/**
 * UpdatePaymentInstrumentRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Incevio\Cybersource\CybersourceSDK
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Incevio\Cybersource\CybersourceSDK Merged Spec
 *
 * All Incevio\Cybersource\CybersourceSDK API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
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

namespace Incevio\Cybersource\CybersourceSDK\Model;

use \ArrayAccess;

/**
 * UpdatePaymentInstrumentRequest Class Doc Comment
 *
 * @category    Class
 * @package     Incevio\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdatePaymentInstrumentRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'updatePaymentInstrumentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bankAccount' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBankAccount',
        'card' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedCard',
        'buyerInformation' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformation',
        'billTo' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBillTo',
        'processingInformation' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedProcessingInformation',
        'merchantInformation' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedMerchantInformation',
        'metaData' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseMetadata',
        'instrumentIdentifier' => '\Incevio\Cybersource\CybersourceSDK\Model\Tmsv1paymentinstrumentsInstrumentIdentifier'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bankAccount' => null,
        'card' => null,
        'buyerInformation' => null,
        'billTo' => null,
        'processingInformation' => null,
        'merchantInformation' => null,
        'metaData' => null,
        'instrumentIdentifier' => null
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
        'bankAccount' => 'bankAccount',
        'card' => 'card',
        'buyerInformation' => 'buyerInformation',
        'billTo' => 'billTo',
        'processingInformation' => 'processingInformation',
        'merchantInformation' => 'merchantInformation',
        'metaData' => 'metaData',
        'instrumentIdentifier' => 'instrumentIdentifier'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'bankAccount' => 'setBankAccount',
        'card' => 'setCard',
        'buyerInformation' => 'setBuyerInformation',
        'billTo' => 'setBillTo',
        'processingInformation' => 'setProcessingInformation',
        'merchantInformation' => 'setMerchantInformation',
        'metaData' => 'setMetaData',
        'instrumentIdentifier' => 'setInstrumentIdentifier'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'bankAccount' => 'getBankAccount',
        'card' => 'getCard',
        'buyerInformation' => 'getBuyerInformation',
        'billTo' => 'getBillTo',
        'processingInformation' => 'getProcessingInformation',
        'merchantInformation' => 'getMerchantInformation',
        'metaData' => 'getMetaData',
        'instrumentIdentifier' => 'getInstrumentIdentifier'
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
        $this->container['bankAccount'] = isset($data['bankAccount']) ? $data['bankAccount'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['buyerInformation'] = isset($data['buyerInformation']) ? $data['buyerInformation'] : null;
        $this->container['billTo'] = isset($data['billTo']) ? $data['billTo'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
        $this->container['merchantInformation'] = isset($data['merchantInformation']) ? $data['merchantInformation'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['instrumentIdentifier'] = isset($data['instrumentIdentifier']) ? $data['instrumentIdentifier'] : null;
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
     * Gets bankAccount
     * @return \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBankAccount
     */
    public function getBankAccount()
    {
        return $this->container['bankAccount'];
    }

    /**
     * Sets bankAccount
     * @param \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBankAccount $bankAccount
     * @return $this
     */
    public function setBankAccount($bankAccount)
    {
        $this->container['bankAccount'] = $bankAccount;

        return $this;
    }

    /**
     * Gets card
     * @return \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedCard $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets buyerInformation
     * @return \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformation
     */
    public function getBuyerInformation()
    {
        return $this->container['buyerInformation'];
    }

    /**
     * Sets buyerInformation
     * @param \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformation $buyerInformation
     * @return $this
     */
    public function setBuyerInformation($buyerInformation)
    {
        $this->container['buyerInformation'] = $buyerInformation;

        return $this;
    }

    /**
     * Gets billTo
     * @return \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBillTo
     */
    public function getBillTo()
    {
        return $this->container['billTo'];
    }

    /**
     * Sets billTo
     * @param \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBillTo $billTo
     * @return $this
     */
    public function setBillTo($billTo)
    {
        $this->container['billTo'] = $billTo;

        return $this;
    }

    /**
     * Gets processingInformation
     * @return \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedProcessingInformation
     */
    public function getProcessingInformation()
    {
        return $this->container['processingInformation'];
    }

    /**
     * Sets processingInformation
     * @param \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedProcessingInformation $processingInformation
     * @return $this
     */
    public function setProcessingInformation($processingInformation)
    {
        $this->container['processingInformation'] = $processingInformation;

        return $this;
    }

    /**
     * Gets merchantInformation
     * @return \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedMerchantInformation
     */
    public function getMerchantInformation()
    {
        return $this->container['merchantInformation'];
    }

    /**
     * Sets merchantInformation
     * @param \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedMerchantInformation $merchantInformation
     * @return $this
     */
    public function setMerchantInformation($merchantInformation)
    {
        $this->container['merchantInformation'] = $merchantInformation;

        return $this;
    }

    /**
     * Gets metaData
     * @return \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseMetadata
     */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
     * Sets metaData
     * @param \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseMetadata $metaData
     * @return $this
     */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;

        return $this;
    }

    /**
     * Gets instrumentIdentifier
     * @return \Incevio\Cybersource\CybersourceSDK\Model\Tmsv1paymentinstrumentsInstrumentIdentifier
     */
    public function getInstrumentIdentifier()
    {
        return $this->container['instrumentIdentifier'];
    }

    /**
     * Sets instrumentIdentifier
     * @param \Incevio\Cybersource\CybersourceSDK\Model\Tmsv1paymentinstrumentsInstrumentIdentifier $instrumentIdentifier
     * @return $this
     */
    public function setInstrumentIdentifier($instrumentIdentifier)
    {
        $this->container['instrumentIdentifier'] = $instrumentIdentifier;

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
            return json_encode(\Incevio\Cybersource\CybersourceSDK\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Incevio\Cybersource\CybersourceSDK\ObjectSerializer::sanitizeForSerialization($this));
    }
}


