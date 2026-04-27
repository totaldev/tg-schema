<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a bid of the current user in an auction.
 */
class UserAuctionBid extends TdObject
{
    public const string TYPE_NAME = 'userAuctionBid';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the bid was made.
         */
        protected int           $bidDate,
        /**
         * The minimum number of Telegram Stars that can be put for the next bid.
         */
        protected int           $nextBidStarCount,
        /**
         * Identifier of the user or the chat that will receive the auctioned item. If the auction is opened in context of another user or chat, then a warning is supposed to be shown to the current user.
         */
        protected MessageSender $ownerId,
        /**
         * The number of Telegram Stars that were put in the bid.
         */
        protected int           $starCount,
        /**
         * True, if the bid was returned to the user, because it was outbid and can't win anymore.
         */
        protected bool          $wasReturned,
    ) {}

    public static function fromArray(array $array): UserAuctionBid
    {
        return new static(
            bidDate         : $array['bid_date'],
            nextBidStarCount: $array['next_bid_star_count'],
            ownerId         : TdSchemaRegistry::fromArray($array['owner_id']),
            starCount       : $array['star_count'],
            wasReturned     : $array['was_returned'],
        );
    }

    public function getBidDate(): int
    {
        return $this->bidDate;
    }

    public function getNextBidStarCount(): int
    {
        return $this->nextBidStarCount;
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getWasReturned(): bool
    {
        return $this->wasReturned;
    }

    public function setBidDate(int $value): static
    {
        $this->bidDate = $value;

        return $this;
    }

    public function setNextBidStarCount(int $value): static
    {
        $this->nextBidStarCount = $value;

        return $this;
    }

    public function setOwnerId(MessageSender $value): static
    {
        $this->ownerId = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function setWasReturned(bool $value): static
    {
        $this->wasReturned = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'bid_date'            => $this->bidDate,
            'next_bid_star_count' => $this->nextBidStarCount,
            'owner_id'            => $this->ownerId->jsonSerialize(),
            'star_count'          => $this->starCount,
            'was_returned'        => $this->wasReturned,
        ];
    }
}
