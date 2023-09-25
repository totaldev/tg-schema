<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for the specified query in the first names, last names and usernames of the known user contacts
 */
class SearchContacts extends TdFunction
{
    public const TYPE_NAME = 'searchContacts';

    /**
     * The maximum number of users to be returned
     *
     * @var int
     */
    protected int $limit;

    /**
     * Query to search for; may be empty to return all contacts
     *
     * @var string
     */
    protected string $query;

    public function __construct(string $query, int $limit)
    {
        $this->query = $query;
        $this->limit = $limit;
    }

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
