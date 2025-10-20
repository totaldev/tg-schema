<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Affiliate;

/**
 * The affiliate programs must be sorted by the profitability.
 */
class AffiliateProgramSortOrderProfitability extends AffiliateProgramSortOrder
{
    public const TYPE_NAME = 'affiliateProgramSortOrderProfitability';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): AffiliateProgramSortOrderProfitability
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
