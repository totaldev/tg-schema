<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Affiliate;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the order of the found affiliate programs.
 */
class AffiliateProgramSortOrder extends TdObject
{
    public const TYPE_NAME = 'AffiliateProgramSortOrder';

    public function __construct() {}

    public static function fromArray(array $array): AffiliateProgramSortOrder
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
