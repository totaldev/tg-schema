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
    public const string TYPE_NAME = 'searchContacts';

    public function __construct(
        /**
         * The maximum number of users to be returned.
         */
        protected int    $limit,
        /**
         * Query to search for; may be empty to return all contacts.
         */
        protected string $query,
    ) {}

    public static function fromArray(array $array): SearchContacts
    {
        return new static(
            limit: $array['limit'],
            query: $array['query'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'limit' => $this->limit,
            'query' => $this->query,
        ];
    }
}
