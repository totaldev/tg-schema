<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches specified query by word prefixes in the provided strings. Returns 0-based positions of strings that matched. Can be called synchronously.
 */
class SearchStringsByPrefix extends TdFunction
{
    public const string TYPE_NAME = 'searchStringsByPrefix';

    public function __construct(
        /**
         * The maximum number of objects to return.
         */
        protected int    $limit,
        /**
         * Query to search for.
         */
        protected string $query,
        /**
         * Pass true to receive no results for an empty query.
         */
        protected bool   $returnNoneForEmptyQuery,
        /**
         * The strings to search in for the query.
         *
         * @var string[]
         */
        protected array  $strings,
    ) {}

    public static function fromArray(array $array): SearchStringsByPrefix
    {
        return new static(
            limit                  : $array['limit'],
            query                  : $array['query'],
            returnNoneForEmptyQuery: $array['return_none_for_empty_query'],
            strings                : $array['strings'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getReturnNoneForEmptyQuery(): bool
    {
        return $this->returnNoneForEmptyQuery;
    }

    public function getStrings(): array
    {
        return $this->strings;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setQuery(string $value): static
    {
        $this->query = $value;

        return $this;
    }

    public function setReturnNoneForEmptyQuery(bool $value): static
    {
        $this->returnNoneForEmptyQuery = $value;

        return $this;
    }

    public function setStrings(array $value): static
    {
        $this->strings = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'limit'                       => $this->limit,
            'query'                       => $this->query,
            'return_none_for_empty_query' => $this->returnNoneForEmptyQuery,
            'strings'                     => $this->strings,
        ];
    }
}
