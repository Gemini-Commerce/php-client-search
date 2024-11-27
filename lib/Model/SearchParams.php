<?php
/**
 * SearchParams
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Search Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SearchParams Class Doc Comment
 *
 * @category Class
 * @description contains params needed to perform search
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SearchParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static $withAdditionalProperties = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'searchParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offset' => 'int',
        'limit' => 'int',
        'term' => 'string',
        'searchables' => '\OpenAPI\Client\Model\SearchParamSearchable[]',
        'filters' => '\OpenAPI\Client\Model\SearchParamFilter[]',
        'attributes' => '\OpenAPI\Client\Model\SearchParamAttribute[]',
        'facets' => '\OpenAPI\Client\Model\SearchParamFacet[]',
        'sorts' => '\OpenAPI\Client\Model\SearchParamSort[]',
        'min_score' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offset' => 'int64',
        'limit' => 'int64',
        'term' => null,
        'searchables' => null,
        'filters' => null,
        'attributes' => null,
        'facets' => null,
        'sorts' => null,
        'min_score' => 'float'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'offset' => false,
        'limit' => false,
        'term' => false,
        'searchables' => false,
        'filters' => false,
        'attributes' => false,
        'facets' => false,
        'sorts' => false,
        'min_score' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'offset' => 'offset',
        'limit' => 'limit',
        'term' => 'term',
        'searchables' => 'searchables',
        'filters' => 'filters',
        'attributes' => 'attributes',
        'facets' => 'facets',
        'sorts' => 'sorts',
        'min_score' => 'minScore'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offset' => 'setOffset',
        'limit' => 'setLimit',
        'term' => 'setTerm',
        'searchables' => 'setSearchables',
        'filters' => 'setFilters',
        'attributes' => 'setAttributes',
        'facets' => 'setFacets',
        'sorts' => 'setSorts',
        'min_score' => 'setMinScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offset' => 'getOffset',
        'limit' => 'getLimit',
        'term' => 'getTerm',
        'searchables' => 'getSearchables',
        'filters' => 'getFilters',
        'attributes' => 'getAttributes',
        'facets' => 'getFacets',
        'sorts' => 'getSorts',
        'min_score' => 'getMinScore'
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
     * Associative array for storing additional properties
     *
     * @var mixed[]
     */
    protected $additionalProperties = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('offset', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('term', $data ?? [], null);
        $this->setIfExists('searchables', $data ?? [], null);
        $this->setIfExists('filters', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
        $this->setIfExists('facets', $data ?? [], null);
        $this->setIfExists('sorts', $data ?? [], null);
        $this->setIfExists('min_score', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets offset
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int|null $offset number of the record where to start to take result for pagination
     *
     * @return self
     */
    public function setOffset($offset)
    {
        if (is_null($offset)) {
            throw new \InvalidArgumentException('non-nullable offset cannot be null');
        }
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit number of search result for page
     *
     * @return self
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets term
     *
     * @return string|null
     */
    public function getTerm()
    {
        return $this->container['term'];
    }

    /**
     * Sets term
     *
     * @param string|null $term term to search
     *
     * @return self
     */
    public function setTerm($term)
    {
        if (is_null($term)) {
            throw new \InvalidArgumentException('non-nullable term cannot be null');
        }
        $this->container['term'] = $term;

        return $this;
    }

    /**
     * Gets searchables
     *
     * @return \OpenAPI\Client\Model\SearchParamSearchable[]|null
     */
    public function getSearchables()
    {
        return $this->container['searchables'];
    }

    /**
     * Sets searchables
     *
     * @param \OpenAPI\Client\Model\SearchParamSearchable[]|null $searchables list of attributes where to search the indicated term, if not indicated it uses all in those present in index configuration
     *
     * @return self
     */
    public function setSearchables($searchables)
    {
        if (is_null($searchables)) {
            throw new \InvalidArgumentException('non-nullable searchables cannot be null');
        }
        $this->container['searchables'] = $searchables;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \OpenAPI\Client\Model\SearchParamFilter[]|null
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \OpenAPI\Client\Model\SearchParamFilter[]|null $filters list of attribute and relative value which you want to filter search results
     *
     * @return self
     */
    public function setFilters($filters)
    {
        if (is_null($filters)) {
            throw new \InvalidArgumentException('non-nullable filters cannot be null');
        }
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \OpenAPI\Client\Model\SearchParamAttribute[]|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \OpenAPI\Client\Model\SearchParamAttribute[]|null $attributes attributes that you want to be present in search results
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        if (is_null($attributes)) {
            throw new \InvalidArgumentException('non-nullable attributes cannot be null');
        }
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets facets
     *
     * @return \OpenAPI\Client\Model\SearchParamFacet[]|null
     */
    public function getFacets()
    {
        return $this->container['facets'];
    }

    /**
     * Sets facets
     *
     * @param \OpenAPI\Client\Model\SearchParamFacet[]|null $facets list of attributes you want to create aggregation to make filter suggestion
     *
     * @return self
     */
    public function setFacets($facets)
    {
        if (is_null($facets)) {
            throw new \InvalidArgumentException('non-nullable facets cannot be null');
        }
        $this->container['facets'] = $facets;

        return $this;
    }

    /**
     * Gets sorts
     *
     * @return \OpenAPI\Client\Model\SearchParamSort[]|null
     */
    public function getSorts()
    {
        return $this->container['sorts'];
    }

    /**
     * Sets sorts
     *
     * @param \OpenAPI\Client\Model\SearchParamSort[]|null $sorts params to sort search results
     *
     * @return self
     */
    public function setSorts($sorts)
    {
        if (is_null($sorts)) {
            throw new \InvalidArgumentException('non-nullable sorts cannot be null');
        }
        $this->container['sorts'] = $sorts;

        return $this;
    }

    /**
     * Gets min_score
     *
     * @return float|null
     */
    public function getMinScore()
    {
        return $this->container['min_score'];
    }

    /**
     * Sets min_score
     *
     * @param float|null $min_score min_score
     *
     * @return self
     */
    public function setMinScore($min_score)
    {
        if (is_null($min_score)) {
            throw new \InvalidArgumentException('non-nullable min_score cannot be null');
        }
        $this->container['min_score'] = $min_score;

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

    public static function withAdditionalProperties(): bool
    {
        return self::$withAdditionalProperties;
    }


    public function setAdditionalProperty($name, $value)
    {
        throw new \InvalidArgumentException(
            sprintf(
                "This model cannot have additional properties"
            )
        );
    }

    public function getAdditionalProperty($name)
    {
        return $this->additionalProperties[$name];
    }

    public function hasAdditionalProperty($name): bool
    {
        return array_key_exists($name, $this->additionalProperties);
    }

    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
}


