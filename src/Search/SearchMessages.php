<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\Chat\ChatList;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for messages in all chats except secret chats. Returns the results in reverse chronological order (i.e., in order of decreasing (date, chat_id,
 * message_id)). For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
 */
class SearchMessages extends TdFunction
{
    public const string TYPE_NAME = 'searchMessages';

    public function __construct(
        /**
         * The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int                           $limit,
        /**
         * If not 0, the maximum date of the messages to return.
         */
        protected int                           $maxDate,
        /**
         * If not 0, the minimum date of the messages to return.
         */
        protected int                           $minDate,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string                        $offset,
        /**
         * Query to search for.
         */
        protected string                        $query,
        /**
         * Chat list in which to search messages; pass null to search in all chats regardless of their chat list. Only Main and Archive chat lists are supported.
         */
        protected ?ChatList                     $chatList = null,
        /**
         * Additional filter for type of the chat of the searched messages; pass null to search for messages in all chats.
         */
        protected ?SearchMessagesChatTypeFilter $chatTypeFilter = null,
        /**
         * Additional filter for messages to search; pass null to search for all messages. Filters searchMessagesFilterMention, searchMessagesFilterUnreadMention, searchMessagesFilterUnreadReaction, searchMessagesFilterUnreadPollVote, searchMessagesFilterFailedToSend, and searchMessagesFilterPinned are unsupported in this function.
         */
        protected ?SearchMessagesFilter         $filter = null,
    ) {}

    public static function fromArray(array $array): SearchMessages
    {
        return new static(
            chatList      : (isset($array['chat_list']) ? TdSchemaRegistry::fromArray($array['chat_list']) : null),
            chatTypeFilter: (isset($array['chat_type_filter']) ? TdSchemaRegistry::fromArray($array['chat_type_filter']) : null),
            filter        : (isset($array['filter']) ? TdSchemaRegistry::fromArray($array['filter']) : null),
            limit         : $array['limit'],
            maxDate       : $array['max_date'],
            minDate       : $array['min_date'],
            offset        : $array['offset'],
            query         : $array['query'],
        );
    }

    public function getChatList(): ?ChatList
    {
        return $this->chatList;
    }

    public function getChatTypeFilter(): ?SearchMessagesChatTypeFilter
    {
        return $this->chatTypeFilter;
    }

    public function getFilter(): ?SearchMessagesFilter
    {
        return $this->filter;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getMaxDate(): int
    {
        return $this->maxDate;
    }

    public function getMinDate(): int
    {
        return $this->minDate;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function setChatList(?ChatList $value): static
    {
        $this->chatList = $value;

        return $this;
    }

    public function setChatTypeFilter(?SearchMessagesChatTypeFilter $value): static
    {
        $this->chatTypeFilter = $value;

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

    public function setMaxDate(int $value): static
    {
        $this->maxDate = $value;

        return $this;
    }

    public function setMinDate(int $value): static
    {
        $this->minDate = $value;

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
            '@type'            => static::TYPE_NAME,
            'chat_list'        => (null !== $this->chatList ? $this->chatList->jsonSerialize() : null),
            'chat_type_filter' => (null !== $this->chatTypeFilter ? $this->chatTypeFilter->jsonSerialize() : null),
            'filter'           => (null !== $this->filter ? $this->filter->jsonSerialize() : null),
            'limit'            => $this->limit,
            'max_date'         => $this->maxDate,
            'min_date'         => $this->minDate,
            'offset'           => $this->offset,
            'query'            => $this->query,
        ];
    }
}
