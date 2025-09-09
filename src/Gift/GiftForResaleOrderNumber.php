<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

/**
 * The gifts will be sorted by their number from the smallest to the largest.
 */
class GiftForResaleOrderNumber extends GiftForResaleOrder
{
    public const TYPE_NAME = 'giftForResaleOrderNumber';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GiftForResaleOrderNumber
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
