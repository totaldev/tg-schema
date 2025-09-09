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
    public const TYPE_NAME = 'searchStringsByPrefix';

    public function __construct(
        /**
         * The strings to search in for the query.
         *
         * @var string[]
         */
        protected array  $strings,
        /**
         * Query to search for.
         */
        protected string $query,
        /**
         * The maximum number of objects to return.
         */
        protected int    $limit,
        /**
         * Pass true to receive no results for an empty query.
         */
        protected bool   $returnNoneForEmptyQuery,
    ) {}

    public static function fromArray(array $array): SearchStringsByPrefix
    {
        return new static(
            $array['strings'],
            $array['query'],
            $array['limit'],
            $array['return_none_for_empty_query'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'strings'                     => $this->strings,
            'query'                       => $this->query,
            'limit'                       => $this->limit,
            'return_none_for_empty_query' => $this->returnNoneForEmptyQuery,
        ];
    }
}
