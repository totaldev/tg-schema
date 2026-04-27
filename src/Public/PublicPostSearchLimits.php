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
         * True, if the search for the specified query isn't charged.
         */
        protected bool $isCurrentQueryFree,
        /**
         * Amount of time till the next free query can be sent; 0 if it can be sent now.
         */
        protected int  $nextFreeQueryIn,
        /**
         * Number of remaining free queries today.
         */
        protected int  $remainingFreeQueryCount,
        /**
         * Number of Telegram Stars that must be paid for each non-free query.
         */
        protected int  $starCount,
    ) {}

    public static function fromArray(array $array): PublicPostSearchLimits
    {
        return new static(
            dailyFreeQueryCount    : $array['daily_free_query_count'],
            isCurrentQueryFree     : $array['is_current_query_free'],
            nextFreeQueryIn        : $array['next_free_query_in'],
            remainingFreeQueryCount: $array['remaining_free_query_count'],
            starCount              : $array['star_count'],
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
            'is_current_query_free'      => $this->isCurrentQueryFree,
            'next_free_query_in'         => $this->nextFreeQueryIn,
            'remaining_free_query_count' => $this->remainingFreeQueryCount,
            'star_count'                 => $this->starCount,
        ];
    }
}
