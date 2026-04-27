<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for messages in secret chats. Returns the results in reverse chronological order. For optimal performance, the number of returned messages is
 * chosen by TDLib.
 */
class SearchSecretMessages extends TdFunction
{
    public const string TYPE_NAME = 'searchSecretMessages';

    public function __construct(
        /**
         * Identifier of the chat in which to search. Specify 0 to search in all secret chats.
         */
        protected int                   $chatId,
        /**
         * The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int                   $limit,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string                $offset,
        /**
         * Query to search for. If empty, searchChatMessages must be used instead.
         */
        protected string                $query,
        /**
         * Additional filter for messages to search; pass null to search for all messages.
         */
        protected ?SearchMessagesFilter $filter = null,
    ) {}

    public static function fromArray(array $array): SearchSecretMessages
    {
        return new static(
            chatId: $array['chat_id'],
            filter: (isset($array['filter']) ? TdSchemaRegistry::fromArray($array['filter']) : null),
            limit : $array['limit'],
            offset: $array['offset'],
            query : $array['query'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFilter(): ?SearchMessagesFilter
    {
        return $this->filter;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): string
    {
        return $this->offset;
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

    public function setFilter(?SearchMessagesFilter $value): static
    {
        $this->filter = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

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
            'offset'  => $this->offset,
            'query'   => $this->query,
        ];
    }
}
