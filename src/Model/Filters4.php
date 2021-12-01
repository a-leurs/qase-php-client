<?php

namespace Qase\Client\Model;

use ArrayAccess;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * Filters4 Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Filters4 implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'status' => 'status',
        'run' => 'run',
        'caseId' => 'case_id',
        'member' => 'member',
        'api' => 'api',
        'fromEndTime' => 'from_end_time',
        'toEndTime' => 'to_end_time'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'run' => 'getRun',
        'caseId' => 'getCaseId',
        'member' => 'getMember',
        'api' => 'getApi',
        'fromEndTime' => 'getFromEndTime',
        'toEndTime' => 'getToEndTime'
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'status' => null,
        'run' => null,
        'caseId' => null,
        'member' => null,
        'api' => null,
        'fromEndTime' => null,
        'toEndTime' => null
    ];
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'filters_4';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'status' => 'string',
        'run' => 'string',
        'caseId' => 'string',
        'member' => 'string',
        'api' => 'bool',
        'fromEndTime' => 'string',
        'toEndTime' => 'string'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'run' => 'setRun',
        'caseId' => 'setCaseId',
        'member' => 'setMember',
        'api' => 'setApi',
        'fromEndTime' => 'setFromEndTime',
        'toEndTime' => 'setToEndTime'
    ];
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['run'] = $data['run'] ?? null;
        $this->container['caseId'] = $data['caseId'] ?? null;
        $this->container['member'] = $data['member'] ?? null;
        $this->container['api'] = $data['api'] ?? null;
        $this->container['fromEndTime'] = $data['fromEndTime'] ?? null;
        $this->container['toEndTime'] = $data['toEndTime'] ?? null;
    }

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
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets api
     *
     * @return bool|null
     */
    public function getApi()
    {
        return $this->container['api'];
    }

    /**
     * Gets caseId
     *
     * @return string|null
     */
    public function getCaseId()
    {
        return $this->container['caseId'];
    }

    /**
     * Gets fromEndTime
     *
     * @return string|null
     */
    public function getFromEndTime()
    {
        return $this->container['fromEndTime'];
    }

    /**
     * Gets member
     *
     * @return string|null
     */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    /**
     * Gets run
     *
     * @return string|null
     */
    public function getRun()
    {
        return $this->container['run'];
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Gets toEndTime
     *
     * @return string|null
     */
    public function getToEndTime()
    {
        return $this->container['toEndTime'];
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed $value Value to be set
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
     * Sets api
     *
     * @param bool|null $api api
     *
     * @return self
     */
    public function setApi($api)
    {
        $this->container['api'] = $api;

        return $this;
    }

    /**
     * Sets caseId
     *
     * @param string|null $caseId A list of case IDs separated by comma.
     *
     * @return self
     */
    public function setCaseId($caseId)
    {
        $this->container['caseId'] = $caseId;

        return $this;
    }

    /**
     * Sets fromEndTime
     *
     * @param string|null $fromEndTime Will return all results created after provided datetime. Allowed format: `Y-m-d H:i:s`.
     *
     * @return self
     */
    public function setFromEndTime($fromEndTime)
    {
        $this->container['fromEndTime'] = $fromEndTime;

        return $this;
    }

    /**
     * Sets member
     *
     * @param string|null $member A list of member IDs separated by comma.
     *
     * @return self
     */
    public function setMember($member)
    {
        $this->container['member'] = $member;

        return $this;
    }

    /**
     * Sets run
     *
     * @param string|null $run A list of run IDs separated by comma.
     *
     * @return self
     */
    public function setRun($run)
    {
        $this->container['run'] = $run;

        return $this;
    }

    /**
     * Sets status
     *
     * @param string|null $status A single test run result status. Possible values: in_progress, passed, failed, blocked, skipped, invalid.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Sets toEndTime
     *
     * @param string|null $toEndTime Will return all results created before provided datetime. Allowed format: `Y-m-d H:i:s`.
     *
     * @return self
     */
    public function setToEndTime($toEndTime)
    {
        $this->container['toEndTime'] = $toEndTime;

        return $this;
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }
}


