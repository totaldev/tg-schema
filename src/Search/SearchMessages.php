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
    public const TYPE_NAME = 'searchMessages';

    public function __construct(
        /**
         * Chat list in which to search messages; pass null to search in all chats regardless of their chat list. Only Main and Archive chat lists are supported.
         */
        protected ChatList             $chatList,
        /**
         * Pass true to search only for messages in channels.
         */
        protected bool                 $onlyInChannels,
        /**
         * Query to search for.
         */
        protected string               $query,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string               $offset,
        /**
         * The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int                  $limit,
        /**
         * Additional filter for messages to search; pass null to search for all messages. Filters searchMessagesFilterMention, searchMessagesFilterUnreadMention, searchMessagesFilterUnreadReaction, searchMessagesFilterFailedToSend, and searchMessagesFilterPinned are unsupported in this function.
         */
        protected SearchMessagesFilter $filter,
        /**
         * If not 0, the minimum date of the messages to return.
         */
        protected int                  $minDate,
        /**
         * If not 0, the maximum date of the messages to return.
         */
        protected int                  $maxDate,
    ) {}

    public static function fromArray(array $array): SearchMessages
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_list']),
            $array['only_in_channels'],
            $array['query'],
            $array['offset'],
            $array['limit'],
            TdSchemaRegistry::fromArray($array['filter']),
            $array['min_date'],
            $array['max_date'],
        );
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function getFilter(): SearchMessagesFilter
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

    public function getOnlyInChannels(): bool
    {
        return $this->onlyInChannels;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'chat_list'        => $this->chatList->typeSerialize(),
            'only_in_channels' => $this->onlyInChannels,
            'query'            => $this->query,
            'offset'           => $this->offset,
            'limit'            => $this->limit,
            'filter'           => $this->filter->typeSerialize(),
            'min_date'         => $this->minDate,
            'max_date'         => $this->maxDate,
        ];
    }
}
