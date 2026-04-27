<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

/**
 * The offer was accepted.
 */
class GiftPurchaseOfferStateAccepted extends GiftPurchaseOfferState
{
    public const string TYPE_NAME = 'giftPurchaseOfferStateAccepted';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GiftPurchaseOfferStateAccepted
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
