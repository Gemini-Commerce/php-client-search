<?php
/**
 * ParamSortOrder
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
 * ParamSortOrder Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Search
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ParamSortOrder
{
    /**
     * Possible values of this enum
     */
    public const ASC = 'ASC';

    public const DESC = 'DESC';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ASC,
            self::DESC
        ];
    }
}


