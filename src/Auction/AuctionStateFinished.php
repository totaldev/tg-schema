<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Auction;

/**
 * Contains information about a finished auction.
 */
class AuctionStateFinished extends AuctionState
{
    public const string TYPE_NAME = 'auctionStateFinished';

    public function __construct(
        /**
         * The number of items that were purchased by the current user on the auction.
         */
        protected int    $acquiredItemCount,
        /**
         * Average price of bought items in Telegram Stars.
         */
        protected int    $averagePrice,
        /**
         * Point in time (Unix timestamp) when the auction will be ended.
         */
        protected int    $endDate,
        /**
         * Number of items from the auction being resold on Fragment.
         */
        protected int    $fragmentListedItemCount,
        /**
         * The HTTPS link to the Fragment for the resold items; may be empty if there are no such items being sold on Fragment.
         */
        protected string $fragmentUrl,
        /**
         * Point in time (Unix timestamp) when the auction started.
         */
        protected int    $startDate,
        /**
         * Number of items from the auction being resold on Telegram.
         */
        protected int    $telegramListedItemCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuctionStateFinished
    {
        return new static(
            acquiredItemCount      : $array['acquired_item_count'],
            averagePrice           : $array['average_price'],
            endDate                : $array['end_date'],
            fragmentListedItemCount: $array['fragment_listed_item_count'],
            fragmentUrl            : $array['fragment_url'],
            startDate              : $array['start_date'],
            telegramListedItemCount: $array['telegram_listed_item_count'],
        );
    }

    public function getAcquiredItemCount(): int
    {
        return $this->acquiredItemCount;
    }

    public function getAveragePrice(): int
    {
        return $this->averagePrice;
    }

    public function getEndDate(): int
    {
        return $this->endDate;
    }

    public function getFragmentListedItemCount(): int
    {
        return $this->fragmentListedItemCount;
    }

    public function getFragmentUrl(): string
    {
        return $this->fragmentUrl;
    }

    public function getStartDate(): int
    {
        return $this->startDate;
    }

    public function getTelegramListedItemCount(): int
    {
        return $this->telegramListedItemCount;
    }

    public function setAcquiredItemCount(int $value): static
    {
        $this->acquiredItemCount = $value;

        return $this;
    }

    public function setAveragePrice(int $value): static
    {
        $this->averagePrice = $value;

        return $this;
    }

    public function setEndDate(int $value): static
    {
        $this->endDate = $value;

        return $this;
    }

    public function setFragmentListedItemCount(int $value): static
    {
        $this->fragmentListedItemCount = $value;

        return $this;
    }

    public function setFragmentUrl(string $value): static
    {
        $this->fragmentUrl = $value;

        return $this;
    }

    public function setStartDate(int $value): static
    {
        $this->startDate = $value;

        return $this;
    }

    public function setTelegramListedItemCount(int $value): static
    {
        $this->telegramListedItemCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'acquired_item_count'        => $this->acquiredItemCount,
            'average_price'              => $this->averagePrice,
            'end_date'                   => $this->endDate,
            'fragment_listed_item_count' => $this->fragmentListedItemCount,
            'fragment_url'               => $this->fragmentUrl,
            'start_date'                 => $this->startDate,
            'telegram_listed_item_count' => $this->telegramListedItemCount,
        ];
    }
}
