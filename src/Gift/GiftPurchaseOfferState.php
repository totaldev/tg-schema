<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;

/**
 * Describes state of a gift purchase offer.
 */
class GiftPurchaseOfferState extends TdObject
{
    public const string TYPE_NAME = 'GiftPurchaseOfferState';

    public function __construct() {}

    public static function fromArray(array $array): GiftPurchaseOfferState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
