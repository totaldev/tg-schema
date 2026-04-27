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
    public const string TYPE_NAME = 'searchChatMembers';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                $chatId,
        /**
         * The maximum number of users to be returned; up to 200.
         */
        protected int                $limit,
        /**
         * Query to search for.
         */
        protected string             $query,
        /**
         * The type of users to search for; pass null to search among all chat members.
         */
        protected ?ChatMembersFilter $filter = null,
    ) {}

    public static function fromArray(array $array): SearchChatMembers
    {
        return new static(
            chatId: $array['chat_id'],
            filter: (isset($array['filter']) ? TdSchemaRegistry::fromArray($array['filter']) : null),
            limit : $array['limit'],
            query : $array['query'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFilter(): ?ChatMembersFilter
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setFilter(?ChatMembersFilter $value): static
    {
        $this->filter = $value;

        return $this;
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
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'filter'  => (null !== $this->filter ? $this->filter->jsonSerialize() : null),
            'limit'   => $this->limit,
            'query'   => $this->query,
        ];
    }
}
