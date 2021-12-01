<?php

namespace Qase\Client\Model;

use ArrayAccess;
use InvalidArgumentException;
use JsonSerializable;
use Qase\Client\ObjectSerializer;

/**
 * RunCreate Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RunCreate implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'title' => 'title',
        'description' => 'description',
        'includeAllCases' => 'include_all_cases',
        'cases' => 'cases',
        'isAutotest' => 'is_autotest',
        'environmentId' => 'environment_id',
        'milestoneId' => 'milestone_id',
        'planId' => 'plan_id',
        'tags' => 'tags'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'description' => 'getDescription',
        'includeAllCases' => 'getIncludeAllCases',
        'cases' => 'getCases',
        'isAutotest' => 'getIsAutotest',
        'environmentId' => 'getEnvironmentId',
        'milestoneId' => 'getMilestoneId',
        'planId' => 'getPlanId',
        'tags' => 'getTags'
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'title' => null,
        'description' => null,
        'includeAllCases' => null,
        'cases' => 'int64',
        'isAutotest' => null,
        'environmentId' => 'int64',
        'milestoneId' => 'int64',
        'planId' => 'int64',
        'tags' => null
    ];
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'RunCreate';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'title' => 'string',
        'description' => 'string',
        'includeAllCases' => 'bool',
        'cases' => 'int[]',
        'isAutotest' => 'bool',
        'environmentId' => 'int',
        'milestoneId' => 'int',
        'planId' => 'int',
        'tags' => 'string[]'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'description' => 'setDescription',
        'includeAllCases' => 'setIncludeAllCases',
        'cases' => 'setCases',
        'isAutotest' => 'setIsAutotest',
        'environmentId' => 'setEnvironmentId',
        'milestoneId' => 'setMilestoneId',
        'planId' => 'setPlanId',
        'tags' => 'setTags'
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['includeAllCases'] = $data['includeAllCases'] ?? null;
        $this->container['cases'] = $data['cases'] ?? null;
        $this->container['isAutotest'] = $data['isAutotest'] ?? null;
        $this->container['environmentId'] = $data['environmentId'] ?? null;
        $this->container['milestoneId'] = $data['milestoneId'] ?? null;
        $this->container['planId'] = $data['planId'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
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
     * Gets cases
     *
     * @return int[]|null
     */
    public function getCases()
    {
        return $this->container['cases'];
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Gets environmentId
     *
     * @return int|null
     */
    public function getEnvironmentId()
    {
        return $this->container['environmentId'];
    }

    /**
     * Gets includeAllCases
     *
     * @return bool|null
     */
    public function getIncludeAllCases()
    {
        return $this->container['includeAllCases'];
    }

    /**
     * Gets isAutotest
     *
     * @return bool|null
     */
    public function getIsAutotest()
    {
        return $this->container['isAutotest'];
    }

    /**
     * Gets milestoneId
     *
     * @return int|null
     */
    public function getMilestoneId()
    {
        return $this->container['milestoneId'];
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
     * Gets planId
     *
     * @return int|null
     */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
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
     * Sets cases
     *
     * @param int[]|null $cases cases
     *
     * @return self
     */
    public function setCases($cases)
    {
        $this->container['cases'] = $cases;

        return $this;
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 10000)) {
            throw new InvalidArgumentException('invalid length for $description when calling RunCreate., must be smaller than or equal to 10000.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Sets environmentId
     *
     * @param int|null $environmentId environmentId
     *
     * @return self
     */
    public function setEnvironmentId($environmentId)
    {

        if (!is_null($environmentId) && ($environmentId < 1)) {
            throw new InvalidArgumentException('invalid value for $environmentId when calling RunCreate., must be bigger than or equal to 1.');
        }

        $this->container['environmentId'] = $environmentId;

        return $this;
    }

    /**
     * Sets includeAllCases
     *
     * @param bool|null $includeAllCases includeAllCases
     *
     * @return self
     */
    public function setIncludeAllCases($includeAllCases)
    {
        $this->container['includeAllCases'] = $includeAllCases;

        return $this;
    }

    /**
     * Sets isAutotest
     *
     * @param bool|null $isAutotest isAutotest
     *
     * @return self
     */
    public function setIsAutotest($isAutotest)
    {
        $this->container['isAutotest'] = $isAutotest;

        return $this;
    }

    /**
     * Sets milestoneId
     *
     * @param int|null $milestoneId milestoneId
     *
     * @return self
     */
    public function setMilestoneId($milestoneId)
    {

        if (!is_null($milestoneId) && ($milestoneId < 1)) {
            throw new InvalidArgumentException('invalid value for $milestoneId when calling RunCreate., must be bigger than or equal to 1.');
        }

        $this->container['milestoneId'] = $milestoneId;

        return $this;
    }

    /**
     * Sets planId
     *
     * @param int|null $planId planId
     *
     * @return self
     */
    public function setPlanId($planId)
    {

        if (!is_null($planId) && ($planId < 1)) {
            throw new InvalidArgumentException('invalid value for $planId when calling RunCreate., must be bigger than or equal to 1.');
        }

        $this->container['planId'] = $planId;

        return $this;
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if ((mb_strlen($title) > 255)) {
            throw new InvalidArgumentException('invalid length for $title when calling RunCreate., must be smaller than or equal to 255.');
        }

        $this->container['title'] = $title;

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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) > 255)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 10000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 10000.";
        }

        if (!is_null($this->container['environmentId']) && ($this->container['environmentId'] < 1)) {
            $invalidProperties[] = "invalid value for 'environmentId', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['milestoneId']) && ($this->container['milestoneId'] < 1)) {
            $invalidProperties[] = "invalid value for 'milestoneId', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['planId']) && ($this->container['planId'] < 1)) {
            $invalidProperties[] = "invalid value for 'planId', must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }
}


