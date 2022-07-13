<?php
/**
 * Run
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Qase.io API
 *
 * Qase API Specification.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@qase.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Qase\Client\Model;

use \ArrayAccess;
use \Qase\Client\ObjectSerializer;

/**
 * Run Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Run implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Run';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'title' => 'string',
        'description' => 'string',
        'status' => 'int',
        'statusText' => 'string',
        'startTime' => '\DateTime',
        'endTime' => '\DateTime',
        'public' => 'bool',
        'stats' => '\Qase\Client\Model\RunStats',
        'timeSpent' => 'int',
        'environment' => '\Qase\Client\Model\RunEnvironment',
        'milestone' => '\Qase\Client\Model\RunMilestone',
        'customFields' => '\Qase\Client\Model\CustomFieldValue[]',
        'tags' => '\Qase\Client\Model\TagValue[]',
        'cases' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'title' => null,
        'description' => null,
        'status' => null,
        'statusText' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'public' => null,
        'stats' => null,
        'timeSpent' => 'int64',
        'environment' => null,
        'milestone' => null,
        'customFields' => null,
        'tags' => null,
        'cases' => 'int64'
    ];

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
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'title' => 'title',
        'description' => 'description',
        'status' => 'status',
        'statusText' => 'status_text',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'public' => 'public',
        'stats' => 'stats',
        'timeSpent' => 'time_spent',
        'environment' => 'environment',
        'milestone' => 'milestone',
        'customFields' => 'custom_fields',
        'tags' => 'tags',
        'cases' => 'cases'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'status' => 'setStatus',
        'statusText' => 'setStatusText',
        'startTime' => 'setStartTime',
        'endTime' => 'setEndTime',
        'public' => 'setPublic',
        'stats' => 'setStats',
        'timeSpent' => 'setTimeSpent',
        'environment' => 'setEnvironment',
        'milestone' => 'setMilestone',
        'customFields' => 'setCustomFields',
        'tags' => 'setTags',
        'cases' => 'setCases'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'status' => 'getStatus',
        'statusText' => 'getStatusText',
        'startTime' => 'getStartTime',
        'endTime' => 'getEndTime',
        'public' => 'getPublic',
        'stats' => 'getStats',
        'timeSpent' => 'getTimeSpent',
        'environment' => 'getEnvironment',
        'milestone' => 'getMilestone',
        'customFields' => 'getCustomFields',
        'tags' => 'getTags',
        'cases' => 'getCases'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['statusText'] = $data['statusText'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['public'] = $data['public'] ?? null;
        $this->container['stats'] = $data['stats'] ?? null;
        $this->container['timeSpent'] = $data['timeSpent'] ?? null;
        $this->container['environment'] = $data['environment'] ?? null;
        $this->container['milestone'] = $data['milestone'] ?? null;
        $this->container['customFields'] = $data['customFields'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['cases'] = $data['cases'] ?? null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
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
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets statusText
     *
     * @return string|null
     */
    public function getStatusText()
    {
        return $this->container['statusText'];
    }

    /**
     * Sets statusText
     *
     * @param string|null $statusText statusText
     *
     * @return self
     */
    public function setStatusText($statusText)
    {
        $this->container['statusText'] = $statusText;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return \DateTime|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param \DateTime|null $startTime startTime
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return \DateTime|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param \DateTime|null $endTime endTime
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets public
     *
     * @return bool|null
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param bool|null $public public
     *
     * @return self
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets stats
     *
     * @return \Qase\Client\Model\RunStats|null
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param \Qase\Client\Model\RunStats|null $stats stats
     *
     * @return self
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

        return $this;
    }

    /**
     * Gets timeSpent
     *
     * @return int|null
     */
    public function getTimeSpent()
    {
        return $this->container['timeSpent'];
    }

    /**
     * Sets timeSpent
     *
     * @param int|null $timeSpent Time in ms.
     *
     * @return self
     */
    public function setTimeSpent($timeSpent)
    {
        $this->container['timeSpent'] = $timeSpent;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return \Qase\Client\Model\RunEnvironment|null
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \Qase\Client\Model\RunEnvironment|null $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets milestone
     *
     * @return \Qase\Client\Model\RunMilestone|null
     */
    public function getMilestone()
    {
        return $this->container['milestone'];
    }

    /**
     * Sets milestone
     *
     * @param \Qase\Client\Model\RunMilestone|null $milestone milestone
     *
     * @return self
     */
    public function setMilestone($milestone)
    {
        $this->container['milestone'] = $milestone;

        return $this;
    }

    /**
     * Gets customFields
     *
     * @return \Qase\Client\Model\CustomFieldValue[]|null
     */
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
     * Sets customFields
     *
     * @param \Qase\Client\Model\CustomFieldValue[]|null $customFields customFields
     *
     * @return self
     */
    public function setCustomFields($customFields)
    {
        $this->container['customFields'] = $customFields;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Qase\Client\Model\TagValue[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Qase\Client\Model\TagValue[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
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
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


