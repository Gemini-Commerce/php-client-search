<?php
/**
 * SearchParamFacetType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  GeminiCommerce\Search
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

namespace GeminiCommerce\Search\Model;
use \GeminiCommerce\Search\ObjectSerializer;

/**
 * SearchParamFacetType Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Search
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SearchParamFacetType
{
    /**
     * Possible values of this enum
     */
    public const TERMS = 'TERMS';

    public const STATS = 'STATS';

    public const HISTOGRAM = 'HISTOGRAM';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TERMS,
            self::STATS,
            self::HISTOGRAM
        ];
    }
}


