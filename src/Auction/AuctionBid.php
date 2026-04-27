<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Auction;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a bid in an auction.
 */
class AuctionBid extends TdObject
{
    public const string TYPE_NAME = 'auctionBid';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the bid was made.
         */
        protected int $bidDate,
        /**
         * Position of the bid in the list of all bids.
         */
        protected int $position,
        /**
         * The number of Telegram Stars that were put in the bid.
         */
        protected int $starCount,
    ) {}

    public static function fromArray(array $array): AuctionBid
    {
        return new static(
            bidDate  : $array['bid_date'],
            position : $array['position'],
            starCount: $array['star_count'],
        );
    }

    public function getBidDate(): int
    {
        return $this->bidDate;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setBidDate(int $value): static
    {
        $this->bidDate = $value;

        return $this;
    }

    public function setPosition(int $value): static
    {
        $this->position = $value;

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
            'bid_date'   => $this->bidDate,
            'position'   => $this->position,
            'star_count' => $this->starCount,
        ];
    }
}
