<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of gifts that were acquired by the current user on an auction.
 */
class GiftAuctionAcquiredGifts extends TdObject
{
    public const string TYPE_NAME = 'giftAuctionAcquiredGifts';

    public function __construct(
        /**
         * The list of acquired gifts.
         *
         * @var GiftAuctionAcquiredGift[]
         */
        protected array $gifts
    ) {}

    public static function fromArray(array $array): GiftAuctionAcquiredGifts
    {
        return new static(
            gifts: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['gifts']),
        );
    }

    public function getGifts(): array
    {
        return $this->gifts;
    }

    public function setGifts(array $value): static
    {
        $this->gifts = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'gifts' => array_map(static fn($x) => $x->jsonSerialize(), $this->gifts),
        ];
    }
}
