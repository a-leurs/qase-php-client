<?php

namespace Qase\Client\Model;

use ArrayAccess;
use DateTime;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * Result Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Result implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'hash' => 'hash',
        'comment' => 'comment',
        'stacktrace' => 'stacktrace',
        'runId' => 'run_id',
        'caseId' => 'case_id',
        'steps' => 'steps',
        'status' => 'status',
        'isApiResult' => 'is_api_result',
        'timeSpentMs' => 'time_spent_ms',
        'endTime' => 'end_time',
        'attachments' => 'attachments'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hash' => 'getHash',
        'comment' => 'getComment',
        'stacktrace' => 'getStacktrace',
        'runId' => 'getRunId',
        'caseId' => 'getCaseId',
        'steps' => 'getSteps',
        'status' => 'getStatus',
        'isApiResult' => 'getIsApiResult',
        'timeSpentMs' => 'getTimeSpentMs',
        'endTime' => 'getEndTime',
        'attachments' => 'getAttachments'
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'hash' => null,
        'comment' => null,
        'stacktrace' => null,
        'runId' => 'int64',
        'caseId' => 'int64',
        'steps' => null,
        'status' => null,
        'isApiResult' => null,
        'timeSpentMs' => 'int64',
        'endTime' => 'date-time',
        'attachments' => null
    ];
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Result';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'hash' => 'string',
        'comment' => 'string',
        'stacktrace' => 'string',
        'runId' => 'int',
        'caseId' => 'int',
        'steps' => '\Qase\Client\Model\ResultSteps[]',
        'status' => 'string',
        'isApiResult' => 'bool',
        'timeSpentMs' => 'int',
        'endTime' => '\DateTime',
        'attachments' => '\Qase\Client\Model\Attachment[]'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hash' => 'setHash',
        'comment' => 'setComment',
        'stacktrace' => 'setStacktrace',
        'runId' => 'setRunId',
        'caseId' => 'setCaseId',
        'steps' => 'setSteps',
        'status' => 'setStatus',
        'isApiResult' => 'setIsApiResult',
        'timeSpentMs' => 'setTimeSpentMs',
        'endTime' => 'setEndTime',
        'attachments' => 'setAttachments'
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
        $this->container['hash'] = $data['hash'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['stacktrace'] = $data['stacktrace'] ?? null;
        $this->container['runId'] = $data['runId'] ?? null;
        $this->container['caseId'] = $data['caseId'] ?? null;
        $this->container['steps'] = $data['steps'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['isApiResult'] = $data['isApiResult'] ?? null;
        $this->container['timeSpentMs'] = $data['timeSpentMs'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
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
     * Gets attachments
     *
     * @return Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Gets caseId
     *
     * @return int|null
     */
    public function getCaseId()
    {
        return $this->container['caseId'];
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Gets endTime
     *
     * @return DateTime|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Gets hash
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Gets isApiResult
     *
     * @return bool|null
     */
    public function getIsApiResult()
    {
        return $this->container['isApiResult'];
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
     * Gets runId
     *
     * @return int|null
     */
    public function getRunId()
    {
        return $this->container['runId'];
    }

    /**
     * Gets stacktrace
     *
     * @return string|null
     */
    public function getStacktrace()
    {
        return $this->container['stacktrace'];
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
     * Gets steps
     *
     * @return ResultSteps[]|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Gets timeSpentMs
     *
     * @return int|null
     */
    public function getTimeSpentMs()
    {
        return $this->container['timeSpentMs'];
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
     * Sets attachments
     *
     * @param Attachment[]|null $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Sets caseId
     *
     * @param int|null $caseId caseId
     *
     * @return self
     */
    public function setCaseId($caseId)
    {
        $this->container['caseId'] = $caseId;

        return $this;
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Sets endTime
     *
     * @param DateTime|null $endTime endTime
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Sets hash
     *
     * @param string|null $hash hash
     *
     * @return self
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Sets isApiResult
     *
     * @param bool|null $isApiResult isApiResult
     *
     * @return self
     */
    public function setIsApiResult($isApiResult)
    {
        $this->container['isApiResult'] = $isApiResult;

        return $this;
    }

    /**
     * Sets runId
     *
     * @param int|null $runId runId
     *
     * @return self
     */
    public function setRunId($runId)
    {
        $this->container['runId'] = $runId;

        return $this;
    }

    /**
     * Sets stacktrace
     *
     * @param string|null $stacktrace stacktrace
     *
     * @return self
     */
    public function setStacktrace($stacktrace)
    {
        $this->container['stacktrace'] = $stacktrace;

        return $this;
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Sets steps
     *
     * @param ResultSteps[]|null $steps steps
     *
     * @return self
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Sets timeSpentMs
     *
     * @param int|null $timeSpentMs timeSpentMs
     *
     * @return self
     */
    public function setTimeSpentMs($timeSpentMs)
    {
        $this->container['timeSpentMs'] = $timeSpentMs;

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


