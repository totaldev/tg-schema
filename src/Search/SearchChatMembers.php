<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\Chat\ChatMembersFilter;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for a specified query in the first name, last name and usernames of the members of a specified chat. Requires administrator rights if the chat is a
 * channel.
 */
class SearchChatMembers extends TdFunction
{
    public const TYPE_NAME = 'searchChatMembers';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int               $chatId,
        /**
         * Query to search for.
         */
        protected string            $query,
        /**
         * The maximum number of users to be returned; up to 200.
         */
        protected int               $limit,
        /**
         * The type of users to search for; pass null to search among all chat members.
         */
        protected ChatMembersFilter $filter,
    ) {}

    public static function fromArray(array $array): SearchChatMembers
    {
        return new static(
            $array['chat_id'],
            $array['query'],
            $array['limit'],
            TdSchemaRegistry::fromArray($array['filter']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFilter(): ChatMembersFilter
    {
        return $this->filter;
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
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'query'   => $this->query,
            'limit'   => $this->limit,
            'filter'  => $this->filter->typeSerialize(),
        ];
    }
}
