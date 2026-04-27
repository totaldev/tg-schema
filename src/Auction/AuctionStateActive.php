<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Auction;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\User\UserAuctionBid;

/**
 * Contains information about an ongoing or scheduled auction.
 */
class AuctionStateActive extends AuctionState
{
    public const string TYPE_NAME = 'auctionStateActive';

    public function __construct(
        /**
         * The number of items that were purchased by the current user on the auction.
         */
        protected int             $acquiredItemCount,
        /**
         * A sparse list of bids that were made in the auction.
         *
         * @var AuctionBid[]
         */
        protected array           $bidLevels,
        /**
         * Point in time (Unix timestamp) when the current round will end.
         */
        protected int             $currentRoundEndDate,
        /**
         * 1-based number of the current round.
         */
        protected int             $currentRoundNumber,
        /**
         * The number of items that were purchased on the auction by all users.
         */
        protected int             $distributedItemCount,
        /**
         * Point in time (Unix timestamp) when the auction will be ended.
         */
        protected int             $endDate,
        /**
         * The number of items that have to be distributed on the auction.
         */
        protected int             $leftItemCount,
        /**
         * The minimum possible bid in the auction in Telegram Stars.
         */
        protected int             $minBid,
        /**
         * Rounds of the auction in which their duration or extension rules are changed.
         *
         * @var AuctionRound[]
         */
        protected array           $rounds,
        /**
         * Point in time (Unix timestamp) when the auction started or will start.
         */
        protected int             $startDate,
        /**
         * User identifiers of at most 3 users with the biggest bids.
         *
         * @var int[]
         */
        protected array           $topBidderUserIds,
        /**
         * The total number of rounds.
         */
        protected int             $totalRoundCount,
        /**
         * Bid of the current user in the auction; may be null if none.
         */
        protected ?UserAuctionBid $userBid,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuctionStateActive
    {
        return new static(
            acquiredItemCount   : $array['acquired_item_count'],
            bidLevels           : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['bid_levels']),
            currentRoundEndDate : $array['current_round_end_date'],
            currentRoundNumber  : $array['current_round_number'],
            distributedItemCount: $array['distributed_item_count'],
            endDate             : $array['end_date'],
            leftItemCount       : $array['left_item_count'],
            minBid              : $array['min_bid'],
            rounds              : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['rounds']),
            startDate           : $array['start_date'],
            topBidderUserIds    : $array['top_bidder_user_ids'],
            totalRoundCount     : $array['total_round_count'],
            userBid             : (isset($array['user_bid']) ? TdSchemaRegistry::fromArray($array['user_bid']) : null),
        );
    }

    public function getAcquiredItemCount(): int
    {
        return $this->acquiredItemCount;
    }

    public function getBidLevels(): array
    {
        return $this->bidLevels;
    }

    public function getCurrentRoundEndDate(): int
    {
        return $this->currentRoundEndDate;
    }

    public function getCurrentRoundNumber(): int
    {
        return $this->currentRoundNumber;
    }

    public function getDistributedItemCount(): int
    {
        return $this->distributedItemCount;
    }

    public function getEndDate(): int
    {
        return $this->endDate;
    }

    public function getLeftItemCount(): int
    {
        return $this->leftItemCount;
    }

    public function getMinBid(): int
    {
        return $this->minBid;
    }

    public function getRounds(): array
    {
        return $this->rounds;
    }

    public function getStartDate(): int
    {
        return $this->startDate;
    }

    public function getTopBidderUserIds(): array
    {
        return $this->topBidderUserIds;
    }

    public function getTotalRoundCount(): int
    {
        return $this->totalRoundCount;
    }

    public function getUserBid(): ?UserAuctionBid
    {
        return $this->userBid;
    }

    public function setAcquiredItemCount(int $value): static
    {
        $this->acquiredItemCount = $value;

        return $this;
    }

    public function setBidLevels(array $value): static
    {
        $this->bidLevels = $value;

        return $this;
    }

    public function setCurrentRoundEndDate(int $value): static
    {
        $this->currentRoundEndDate = $value;

        return $this;
    }

    public function setCurrentRoundNumber(int $value): static
    {
        $this->currentRoundNumber = $value;

        return $this;
    }

    public function setDistributedItemCount(int $value): static
    {
        $this->distributedItemCount = $value;

        return $this;
    }

    public function setEndDate(int $value): static
    {
        $this->endDate = $value;

        return $this;
    }

    public function setLeftItemCount(int $value): static
    {
        $this->leftItemCount = $value;

        return $this;
    }

    public function setMinBid(int $value): static
    {
        $this->minBid = $value;

        return $this;
    }

    public function setRounds(array $value): static
    {
        $this->rounds = $value;

        return $this;
    }

    public function setStartDate(int $value): static
    {
        $this->startDate = $value;

        return $this;
    }

    public function setTopBidderUserIds(array $value): static
    {
        $this->topBidderUserIds = $value;

        return $this;
    }

    public function setTotalRoundCount(int $value): static
    {
        $this->totalRoundCount = $value;

        return $this;
    }

    public function setUserBid(?UserAuctionBid $value): static
    {
        $this->userBid = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'acquired_item_count'    => $this->acquiredItemCount,
            'bid_levels'             => array_map(static fn($x) => $x->jsonSerialize(), $this->bidLevels),
            'current_round_end_date' => $this->currentRoundEndDate,
            'current_round_number'   => $this->currentRoundNumber,
            'distributed_item_count' => $this->distributedItemCount,
            'end_date'               => $this->endDate,
            'left_item_count'        => $this->leftItemCount,
            'min_bid'                => $this->minBid,
            'rounds'                 => array_map(static fn($x) => $x->jsonSerialize(), $this->rounds),
            'start_date'             => $this->startDate,
            'top_bidder_user_ids'    => $this->topBidderUserIds,
            'total_round_count'      => $this->totalRoundCount,
            'user_bid'               => (null !== $this->userBid ? $this->userBid->jsonSerialize() : null),
        ];
    }
}
