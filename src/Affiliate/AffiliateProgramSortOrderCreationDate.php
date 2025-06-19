<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Affiliate;

/**
 * The affiliate programs must be sorted by creation date.
 */
class AffiliateProgramSortOrderCreationDate extends AffiliateProgramSortOrder
{
    public const TYPE_NAME = 'affiliateProgramSortOrderCreationDate';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): AffiliateProgramSortOrderCreationDate
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
