<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches public chats by looking for specified query in their username and title. Currently, only private chats, supergroups and channels can be public.
 * Returns a meaningful number of results. Excludes private chats with contacts and chats from the chat list from the results.
 */
class SearchPublicChats extends TdFunction
{
    public const TYPE_NAME = 'searchPublicChats';

    public function __construct(
        /**
         * Query to search for.
         */
        protected string $query
    ) {}

    public static function fromArray(array $array): SearchPublicChats
    {
        return new static(
            $array['query'],
        );
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
        ];
    }
}
