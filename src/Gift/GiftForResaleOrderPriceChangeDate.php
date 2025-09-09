<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

/**
 * The gifts will be sorted by the last date when their price was changed from the newest to the oldest.
 */
class GiftForResaleOrderPriceChangeDate extends GiftForResaleOrder
{
    public const TYPE_NAME = 'giftForResaleOrderPriceChangeDate';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GiftForResaleOrderPriceChangeDate
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
