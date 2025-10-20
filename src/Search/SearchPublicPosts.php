<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for public channel posts using the given query. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than
 * the specified limit.
 */
class SearchPublicPosts extends TdFunction
{
    public const TYPE_NAME = 'searchPublicPosts';

    public function __construct(
        /**
         * Query to search for.
         */
        protected string $query,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int    $limit,
        /**
         * The amount of Telegram Stars the user agreed to pay for the search; pass 0 for free searches.
         */
        protected int    $starCount,
    ) {}

    public static function fromArray(array $array): SearchPublicPosts
    {
        return new static(
            $array['query'],
            $array['offset'],
            $array['limit'],
            $array['star_count'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'query'      => $this->query,
            'offset'     => $this->offset,
            'limit'      => $this->limit,
            'star_count' => $this->starCount,
        ];
    }
}
