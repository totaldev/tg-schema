<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for the specified query in the title and username of already known chats. This is an offline method. Returns chats in the order seen in the main
 * chat list.
 */
class SearchChats extends TdFunction
{
    public const TYPE_NAME = 'searchChats';

    public function __construct(
        /**
         * Query to search for. If the query is empty, returns up to 50 recently found chats.
         */
        protected string $query,
        /**
         * The maximum number of chats to be returned.
         */
        protected int    $limit
    ) {}

    public static function fromArray(array $array): SearchChats
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
