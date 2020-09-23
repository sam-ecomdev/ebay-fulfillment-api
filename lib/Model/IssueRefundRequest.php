<?php
/**
 * IssueRefundRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * OpenAPI spec version: v1.18.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
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
 * IssueRefundRequest Class Doc Comment
 *
 * @category Class
 * @description The base type used by the request payload of the issueRefund method.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IssueRefundRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IssueRefundRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reason_for_refund' => 'string',
'comment' => 'string',
'refund_items' => '\Swagger\Client\Model\RefundItem[]',
'order_level_refund_amount' => '\Swagger\Client\Model\SimpleAmount'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reason_for_refund' => null,
'comment' => null,
'refund_items' => null,
'order_level_refund_amount' => null    ];

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
        'reason_for_refund' => 'reasonForRefund',
'comment' => 'comment',
'refund_items' => 'refundItems',
'order_level_refund_amount' => 'orderLevelRefundAmount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reason_for_refund' => 'setReasonForRefund',
'comment' => 'setComment',
'refund_items' => 'setRefundItems',
'order_level_refund_amount' => 'setOrderLevelRefundAmount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reason_for_refund' => 'getReasonForRefund',
'comment' => 'getComment',
'refund_items' => 'getRefundItems',
'order_level_refund_amount' => 'getOrderLevelRefundAmount'    ];

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
        $this->container['reason_for_refund'] = isset($data['reason_for_refund']) ? $data['reason_for_refund'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['refund_items'] = isset($data['refund_items']) ? $data['refund_items'] : null;
        $this->container['order_level_refund_amount'] = isset($data['order_level_refund_amount']) ? $data['order_level_refund_amount'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets reason_for_refund
     *
     * @return string
     */
    public function getReasonForRefund()
    {
        return $this->container['reason_for_refund'];
    }

    /**
     * Sets reason_for_refund
     *
     * @param string $reason_for_refund The enumeration value passed into this field indicates the reason for the refund. One of the defined enumeration values in the ReasonForRefundEnum type must be used. This field is required, and it is highly recommended that sellers use the correct refund reason, especially in the case of a buyer-requested cancellation or 'buyer remorse' return to indicate that there was nothing wrong with the item(s) or with the shipment of the order. Note: If issuing refunds for more than one order line item, keep in mind that the refund reason must be the same for each of the order line items. If the refund reason is different for one or more order line items in an order, the seller would need to make separate issueRefund calls, one for each refund reason. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ReasonForRefundEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setReasonForRefund($reason_for_refund)
    {
        $this->container['reason_for_refund'] = $reason_for_refund;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment This free-text field allows the seller to clarify why the refund is being issued to the buyer. Max Length: 100
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets refund_items
     *
     * @return \Swagger\Client\Model\RefundItem[]
     */
    public function getRefundItems()
    {
        return $this->container['refund_items'];
    }

    /**
     * Sets refund_items
     *
     * @param \Swagger\Client\Model\RefundItem[] $refund_items The refundItems array is only required if the seller is issuing a refund for one or more individual order line items in a multiple line item order. Otherwise, the seller just uses the orderLevelRefundAmount container to specify the amount of the refund for the entire order.
     *
     * @return $this
     */
    public function setRefundItems($refund_items)
    {
        $this->container['refund_items'] = $refund_items;

        return $this;
    }

    /**
     * Gets order_level_refund_amount
     *
     * @return \Swagger\Client\Model\SimpleAmount
     */
    public function getOrderLevelRefundAmount()
    {
        return $this->container['order_level_refund_amount'];
    }

    /**
     * Sets order_level_refund_amount
     *
     * @param \Swagger\Client\Model\SimpleAmount $order_level_refund_amount order_level_refund_amount
     *
     * @return $this
     */
    public function setOrderLevelRefundAmount($order_level_refund_amount)
    {
        $this->container['order_level_refund_amount'] = $order_level_refund_amount;

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