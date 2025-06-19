<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for the specified query in the first names, last names and usernames of the known user contacts.
 */
class SearchContacts extends TdFunction
{
    public const TYPE_NAME = 'searchContacts';

    public function __construct(
        /**
         * Query to search for; may be empty to return all contacts.
         */
        protected string $query,
        /**
         * The maximum number of users to be returned.
         */
        protected int    $limit
    ) {}

    public static function fromArray(array $array): SearchContacts
    {
        return new static(
            $array['query'],
            $array['limit'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
            'limit' => $this->limit,
        ];
    }
}
