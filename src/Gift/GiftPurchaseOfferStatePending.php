<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

/**
 * The offer must be accepted or rejected.
 */
class GiftPurchaseOfferStatePending extends GiftPurchaseOfferState
{
    public const string TYPE_NAME = 'giftPurchaseOfferStatePending';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GiftPurchaseOfferStatePending
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
