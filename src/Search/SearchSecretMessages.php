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
         * Query to search for. If empty, searchChatMessages must be used instead.
         */
        protected string                $query,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string                $offset,
        /**
         * The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int                   $limit,
        /**
         * Additional filter for messages to search; pass null to search for all messages.
         */
        protected ?SearchMessagesFilter $filter = null,
    ) {}

    public static function fromArray(array $array): SearchSecretMessages
    {
        return new static(
            $array['chat_id'],
            $array['query'],
            $array['offset'],
            $array['limit'],
            isset($array['filter']) ? TdSchemaRegistry::fromArray($array['filter']) : null,
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
            'query'   => $this->query,
            'offset'  => $this->offset,
            'limit'   => $this->limit,
            'filter'  => $this->filter ?? null,
        ];
    }
}
