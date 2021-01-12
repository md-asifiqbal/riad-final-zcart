<?php
/**
 * PaymentInstrument
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
 * PaymentInstrument Class Doc Comment
 *
 * @category    Class
 * @package     Incevio\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentInstrument implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentInstrument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedLinks',
        'id' => 'string',
        'object' => 'string',
        'state' => 'string',
        'bankAccount' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBankAccount',
        'card' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedCard',
        'buyerInformation' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformation',
        'billTo' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBillTo',
        'processingInformation' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedProcessingInformation',
        'merchantInformation' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedMerchantInformation',
        'metaData' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseMetadata',
        'embedded' => '\Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedEmbedded'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'id' => null,
        'object' => null,
        'state' => null,
        'bankAccount' => null,
        'card' => null,
        'buyerInformation' => null,
        'billTo' => null,
        'processingInformation' => null,
        'merchantInformation' => null,
        'metaData' => null,
        'embedded' => null
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
        'object' => 'object',
        'state' => 'state',
        'bankAccount' => 'bankAccount',
        'card' => 'card',
        'buyerInformation' => 'buyerInformation',
        'billTo' => 'billTo',
        'processingInformation' => 'processingInformation',
        'merchantInformation' => 'merchantInformation',
        'metaData' => 'metaData',
        'embedded' => '_embedded'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'id' => 'setId',
        'object' => 'setObject',
        'state' => 'setState',
        'bankAccount' => 'setBankAccount',
        'card' => 'setCard',
        'buyerInformation' => 'setBuyerInformation',
        'billTo' => 'setBillTo',
        'processingInformation' => 'setProcessingInformation',
        'merchantInformation' => 'setMerchantInformation',
        'metaData' => 'setMetaData',
        'embedded' => 'setEmbedded'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'id' => 'getId',
        'object' => 'getObject',
        'state' => 'getState',
        'bankAccount' => 'getBankAccount',
        'card' => 'getCard',
        'buyerInformation' => 'getBuyerInformation',
        'billTo' => 'getBillTo',
        'processingInformation' => 'getProcessingInformation',
        'merchantInformation' => 'getMerchantInformation',
        'metaData' => 'getMetaData',
        'embedded' => 'getEmbedded'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['bankAccount'] = isset($data['bankAccount']) ? $data['bankAccount'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['buyerInformation'] = isset($data['buyerInformation']) ? $data['buyerInformation'] : null;
        $this->container['billTo'] = isset($data['billTo']) ? $data['billTo'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
        $this->container['merchantInformation'] = isset($data['merchantInformation']) ? $data['merchantInformation'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['embedded'] = isset($data['embedded']) ? $data['embedded'] : null;
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
     * Gets links
     * @return \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedLinks $links
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
     * @param string $id Unique identification number assigned by Incevio\Cybersource\CybersourceSDK to the submitted request.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     * @param string $object 'Describes type of token.'  Valid values: - instrumentIdentifier
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state 'Current state of the token.'  Valid values: - ACTIVE - CLOSED
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
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
     * Gets embedded
     * @return \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedEmbedded
     */
    public function getEmbedded()
    {
        return $this->container['embedded'];
    }

    /**
     * Sets embedded
     * @param \Incevio\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedEmbedded $embedded
     * @return $this
     */
    public function setEmbedded($embedded)
    {
        $this->container['embedded'] = $embedded;

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


