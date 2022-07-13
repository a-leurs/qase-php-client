<?php
/**
 * CustomFieldUpdate
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
 * CustomFieldUpdate Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomFieldUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomFieldUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'value' => '\Qase\Client\Model\CustomFieldCreateValueInner[]',
        'replaceValues' => 'array<string,string>',
        'placeholder' => 'string',
        'defaultValue' => 'string',
        'isFilterable' => 'bool',
        'isVisible' => 'bool',
        'isRequired' => 'bool',
        'isEnabledForAllProjects' => 'bool',
        'projectsCodes' => 'string[]'
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
        'value' => null,
        'replaceValues' => null,
        'placeholder' => null,
        'defaultValue' => null,
        'isFilterable' => null,
        'isVisible' => null,
        'isRequired' => null,
        'isEnabledForAllProjects' => null,
        'projectsCodes' => null
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
        'title' => 'title',
        'value' => 'value',
        'replaceValues' => 'replace_values',
        'placeholder' => 'placeholder',
        'defaultValue' => 'default_value',
        'isFilterable' => 'is_filterable',
        'isVisible' => 'is_visible',
        'isRequired' => 'is_required',
        'isEnabledForAllProjects' => 'is_enabled_for_all_projects',
        'projectsCodes' => 'projects_codes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'value' => 'setValue',
        'replaceValues' => 'setReplaceValues',
        'placeholder' => 'setPlaceholder',
        'defaultValue' => 'setDefaultValue',
        'isFilterable' => 'setIsFilterable',
        'isVisible' => 'setIsVisible',
        'isRequired' => 'setIsRequired',
        'isEnabledForAllProjects' => 'setIsEnabledForAllProjects',
        'projectsCodes' => 'setProjectsCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'value' => 'getValue',
        'replaceValues' => 'getReplaceValues',
        'placeholder' => 'getPlaceholder',
        'defaultValue' => 'getDefaultValue',
        'isFilterable' => 'getIsFilterable',
        'isVisible' => 'getIsVisible',
        'isRequired' => 'getIsRequired',
        'isEnabledForAllProjects' => 'getIsEnabledForAllProjects',
        'projectsCodes' => 'getProjectsCodes'
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['replaceValues'] = $data['replaceValues'] ?? null;
        $this->container['placeholder'] = $data['placeholder'] ?? null;
        $this->container['defaultValue'] = $data['defaultValue'] ?? null;
        $this->container['isFilterable'] = $data['isFilterable'] ?? null;
        $this->container['isVisible'] = $data['isVisible'] ?? null;
        $this->container['isRequired'] = $data['isRequired'] ?? null;
        $this->container['isEnabledForAllProjects'] = $data['isEnabledForAllProjects'] ?? null;
        $this->container['projectsCodes'] = $data['projectsCodes'] ?? null;
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

        if (!is_null($this->container['placeholder']) && (mb_strlen($this->container['placeholder']) > 255)) {
            $invalidProperties[] = "invalid value for 'placeholder', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) > 255)) {
            $invalidProperties[] = "invalid value for 'defaultValue', the character length must be smaller than or equal to 255.";
        }

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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
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
            throw new \InvalidArgumentException('invalid length for $title when calling CustomFieldUpdate., must be smaller than or equal to 255.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets value
     *
     * @return \Qase\Client\Model\CustomFieldCreateValueInner[]|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \Qase\Client\Model\CustomFieldCreateValueInner[]|null $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets replaceValues
     *
     * @return array<string,string>|null
     */
    public function getReplaceValues()
    {
        return $this->container['replaceValues'];
    }

    /**
     * Sets replaceValues
     *
     * @param array<string,string>|null $replaceValues Dictionary of old values and their replacemants
     *
     * @return self
     */
    public function setReplaceValues($replaceValues)
    {
        $this->container['replaceValues'] = $replaceValues;

        return $this;
    }

    /**
     * Gets placeholder
     *
     * @return string|null
     */
    public function getPlaceholder()
    {
        return $this->container['placeholder'];
    }

    /**
     * Sets placeholder
     *
     * @param string|null $placeholder placeholder
     *
     * @return self
     */
    public function setPlaceholder($placeholder)
    {
        if (!is_null($placeholder) && (mb_strlen($placeholder) > 255)) {
            throw new \InvalidArgumentException('invalid length for $placeholder when calling CustomFieldUpdate., must be smaller than or equal to 255.');
        }

        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Gets defaultValue
     *
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
     * Sets defaultValue
     *
     * @param string|null $defaultValue defaultValue
     *
     * @return self
     */
    public function setDefaultValue($defaultValue)
    {
        if (!is_null($defaultValue) && (mb_strlen($defaultValue) > 255)) {
            throw new \InvalidArgumentException('invalid length for $defaultValue when calling CustomFieldUpdate., must be smaller than or equal to 255.');
        }

        $this->container['defaultValue'] = $defaultValue;

        return $this;
    }

    /**
     * Gets isFilterable
     *
     * @return bool|null
     */
    public function getIsFilterable()
    {
        return $this->container['isFilterable'];
    }

    /**
     * Sets isFilterable
     *
     * @param bool|null $isFilterable isFilterable
     *
     * @return self
     */
    public function setIsFilterable($isFilterable)
    {
        $this->container['isFilterable'] = $isFilterable;

        return $this;
    }

    /**
     * Gets isVisible
     *
     * @return bool|null
     */
    public function getIsVisible()
    {
        return $this->container['isVisible'];
    }

    /**
     * Sets isVisible
     *
     * @param bool|null $isVisible isVisible
     *
     * @return self
     */
    public function setIsVisible($isVisible)
    {
        $this->container['isVisible'] = $isVisible;

        return $this;
    }

    /**
     * Gets isRequired
     *
     * @return bool|null
     */
    public function getIsRequired()
    {
        return $this->container['isRequired'];
    }

    /**
     * Sets isRequired
     *
     * @param bool|null $isRequired isRequired
     *
     * @return self
     */
    public function setIsRequired($isRequired)
    {
        $this->container['isRequired'] = $isRequired;

        return $this;
    }

    /**
     * Gets isEnabledForAllProjects
     *
     * @return bool|null
     */
    public function getIsEnabledForAllProjects()
    {
        return $this->container['isEnabledForAllProjects'];
    }

    /**
     * Sets isEnabledForAllProjects
     *
     * @param bool|null $isEnabledForAllProjects isEnabledForAllProjects
     *
     * @return self
     */
    public function setIsEnabledForAllProjects($isEnabledForAllProjects)
    {
        $this->container['isEnabledForAllProjects'] = $isEnabledForAllProjects;

        return $this;
    }

    /**
     * Gets projectsCodes
     *
     * @return string[]|null
     */
    public function getProjectsCodes()
    {
        return $this->container['projectsCodes'];
    }

    /**
     * Sets projectsCodes
     *
     * @param string[]|null $projectsCodes projectsCodes
     *
     * @return self
     */
    public function setProjectsCodes($projectsCodes)
    {
        $this->container['projectsCodes'] = $projectsCodes;

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


