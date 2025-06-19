<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;

/**
 * Describes order in which upgraded gifts for resale will be sorted.
 */
class GiftForResaleOrder extends TdObject
{
    public const TYPE_NAME = 'GiftForResaleOrder';

    public function __construct() {}

    public static function fromArray(array $array): GiftForResaleOrder
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
