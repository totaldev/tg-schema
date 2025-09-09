<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

/**
 * The gifts will be sorted by their price from the lowest to the highest.
 */
class GiftForResaleOrderPrice extends GiftForResaleOrder
{
    public const TYPE_NAME = 'giftForResaleOrderPrice';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GiftForResaleOrderPrice
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
