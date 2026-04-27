<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

/**
 * The offer was rejected.
 */
class GiftPurchaseOfferStateRejected extends GiftPurchaseOfferState
{
    public const string TYPE_NAME = 'giftPurchaseOfferStateRejected';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GiftPurchaseOfferStateRejected
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
