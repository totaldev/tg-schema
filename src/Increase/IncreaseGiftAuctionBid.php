<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Increase;

use Totaldev\TgSchema\TdFunction;

/**
 * Increases a bid for an auction gift without changing gift text and receiver.
 */
class IncreaseGiftAuctionBid extends TdFunction
{
    public const string TYPE_NAME = 'increaseGiftAuctionBid';

    public function __construct(
        /**
         * Identifier of the gift to put the bid on.
         */
        protected int $giftId,
        /**
         * The number of Telegram Stars to put in the bid.
         */
        protected int $starCount,
    ) {}

    public static function fromArray(array $array): IncreaseGiftAuctionBid
    {
        return new static(
            giftId   : $array['gift_id'],
            starCount: $array['star_count'],
        );
    }

    public function getGiftId(): int
    {
        return $this->giftId;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setGiftId(int $value): static
    {
        $this->giftId = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'gift_id'    => $this->giftId,
            'star_count' => $this->starCount,
        ];
    }
}
