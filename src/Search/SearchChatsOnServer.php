<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for the specified query in the title and username of already known chats via request to the server. Returns chats in the order seen in the main
 * chat list.
 */
class SearchChatsOnServer extends TdFunction
{
    public const TYPE_NAME = 'searchChatsOnServer';

    public function __construct(
        /**
         * Query to search for.
         */
        protected string $query,
        /**
         * The maximum number of chats to be returned.
         */
        protected int    $limit,
    ) {}

    public static function fromArray(array $array): SearchChatsOnServer
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
