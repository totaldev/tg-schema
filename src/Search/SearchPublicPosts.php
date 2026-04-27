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
    public const string TYPE_NAME = 'searchPublicPosts';

    public function __construct(
        /**
         * The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int    $limit,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * Query to search for.
         */
        protected string $query,
        /**
         * The Telegram Star amount the user agreed to pay for the search; pass 0 for free searches.
         */
        protected int    $starCount,
    ) {}

    public static function fromArray(array $array): SearchPublicPosts
    {
        return new static(
            limit    : $array['limit'],
            offset   : $array['offset'],
            query    : $array['query'],
            starCount: $array['star_count'],
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

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setQuery(string $value): static
    {
        $this->query = $value;

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
            'limit'      => $this->limit,
            'offset'     => $this->offset,
            'query'      => $this->query,
            'star_count' => $this->starCount,
        ];
    }
}
