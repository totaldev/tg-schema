<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Affiliate;

/**
 * The affiliate programs must be sorted by the expected revenue.
 */
class AffiliateProgramSortOrderRevenue extends AffiliateProgramSortOrder
{
    public const TYPE_NAME = 'affiliateProgramSortOrderRevenue';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): AffiliateProgramSortOrderRevenue
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
