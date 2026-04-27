<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the gifts that were acquired by the current user on a gift auction.
 */
class GetGiftAuctionAcquiredGifts extends TdFunction
{
    public const string TYPE_NAME = 'getGiftAuctionAcquiredGifts';

    public function __construct(
        /**
         * Identifier of the auctioned gift.
         */
        protected int $giftId
    ) {}

    public static function fromArray(array $array): GetGiftAuctionAcquiredGifts
    {
        return new static(
            giftId: $array['gift_id'],
        );
    }

    public function getGiftId(): int
    {
        return $this->giftId;
    }

    public function setGiftId(int $value): static
    {
        $this->giftId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'gift_id' => $this->giftId,
        ];
    }
}
