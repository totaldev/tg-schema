<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Auction;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a round of an auction.
 */
class AuctionRound extends TdObject
{
    public const string TYPE_NAME = 'auctionRound';

    public function __construct(
        /**
         * Duration of the round, in seconds.
         */
        protected int $duration,
        /**
         * The number of seconds for which the round will be extended if there are changes in the top winners.
         */
        protected int $extendTime,
        /**
         * 1-based number of the round.
         */
        protected int $number,
        /**
         * The number of top winners who trigger round extension if changed.
         */
        protected int $topWinnerCount,
    ) {}

    public static function fromArray(array $array): AuctionRound
    {
        return new static(
            duration      : $array['duration'],
            extendTime    : $array['extend_time'],
            number        : $array['number'],
            topWinnerCount: $array['top_winner_count'],
        );
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getExtendTime(): int
    {
        return $this->extendTime;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getTopWinnerCount(): int
    {
        return $this->topWinnerCount;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setExtendTime(int $value): static
    {
        $this->extendTime = $value;

        return $this;
    }

    public function setNumber(int $value): static
    {
        $this->number = $value;

        return $this;
    }

    public function setTopWinnerCount(int $value): static
    {
        $this->topWinnerCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'duration'         => $this->duration,
            'extend_time'      => $this->extendTime,
            'number'           => $this->number,
            'top_winner_count' => $this->topWinnerCount,
        ];
    }
}
