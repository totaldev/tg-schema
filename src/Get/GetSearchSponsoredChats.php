<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns sponsored chats to be shown in the search results.
 */
class GetSearchSponsoredChats extends TdFunction
{
    public const TYPE_NAME = 'getSearchSponsoredChats';

    public function __construct(
        /**
         * Query the user searches for.
         */
        protected string $query
    ) {}

    public static function fromArray(array $array): GetSearchSponsoredChats
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
