<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Public;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about public post search limits.
 */
class PublicPostSearchLimits extends TdObject
{
    public const string TYPE_NAME = 'publicPostSearchLimits';

    public function __construct(
        /**
         * Number of queries that can be sent daily for free.
         */
        protected int  $dailyFreeQueryCount,
        /**
         * Number of remaining free queries today.
         */
        protected int  $remainingFreeQueryCount,
        /**
         * Amount of time till the next free query can be sent; 0 if it can be sent now.
         */
        protected int  $nextFreeQueryIn,
        /**
         * Number of Telegram Stars that must be paid for each non-free query.
         */
        protected int  $starCount,
        /**
         * True, if the search for the specified query isn't charged.
         */
        protected bool $isCurrentQueryFree,
    ) {}

    public static function fromArray(array $array): PublicPostSearchLimits
    {
        return new static(
            $array['daily_free_query_count'],
            $array['remaining_free_query_count'],
            $array['next_free_query_in'],
            $array['star_count'],
            $array['is_current_query_free'],
        );
    }

    public function getDailyFreeQueryCount(): int
    {
        return $this->dailyFreeQueryCount;
    }

    public function getIsCurrentQueryFree(): bool
    {
        return $this->isCurrentQueryFree;
    }

    public function getNextFreeQueryIn(): int
    {
        return $this->nextFreeQueryIn;
    }

    public function getRemainingFreeQueryCount(): int
    {
        return $this->remainingFreeQueryCount;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setDailyFreeQueryCount(int $value): static
    {
        $this->dailyFreeQueryCount = $value;

        return $this;
    }

    public function setIsCurrentQueryFree(bool $value): static
    {
        $this->isCurrentQueryFree = $value;

        return $this;
    }

    public function setNextFreeQueryIn(int $value): static
    {
        $this->nextFreeQueryIn = $value;

        return $this;
    }

    public function setRemainingFreeQueryCount(int $value): static
    {
        $this->remainingFreeQueryCount = $value;

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
            '@type'                      => static::TYPE_NAME,
            'daily_free_query_count'     => $this->dailyFreeQueryCount,
            'remaining_free_query_count' => $this->remainingFreeQueryCount,
            'next_free_query_in'         => $this->nextFreeQueryIn,
            'star_count'                 => $this->starCount,
            'is_current_query_free'      => $this->isCurrentQueryFree,
        ];
    }
}
