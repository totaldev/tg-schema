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
 * message_id)). For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit
 */
class SearchMessages extends TdFunction
{
    public const TYPE_NAME = 'searchMessages';

    /**
     * Chat list in which to search messages; pass null to search in all chats regardless of their chat list. Only Main and Archive chat lists are supported
     *
     * @var ChatList
     */
    protected ChatList $chatList;

    /**
     * Additional filter for messages to search; pass null to search for all messages. Filters searchMessagesFilterMention, searchMessagesFilterUnreadMention,
     * searchMessagesFilterUnreadReaction, searchMessagesFilterFailedToSend, and searchMessagesFilterPinned are unsupported in this function
     *
     * @var SearchMessagesFilter
     */
    protected SearchMessagesFilter $filter;

    /**
     * The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller
     * than the specified limit
     *
     * @var int
     */
    protected int $limit;

    /**
     * If not 0, the maximum date of the messages to return
     *
     * @var int
     */
    protected int $maxDate;

    /**
     * If not 0, the minimum date of the messages to return
     *
     * @var int
     */
    protected int $minDate;

    /**
     * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     *
     * @var string
     */
    protected string $offset;

    /**
     * Query to search for
     *
     * @var string
     */
    protected string $query;

    public function __construct(
        ChatList             $chatList,
        string               $query,
        string               $offset,
        int                  $limit,
        SearchMessagesFilter $filter,
        int                  $minDate,
        int                  $maxDate,
    )
    {
        $this->chatList = $chatList;
        $this->query = $query;
        $this->offset = $offset;
        $this->limit = $limit;
        $this->filter = $filter;
        $this->minDate = $minDate;
        $this->maxDate = $maxDate;
    }

    public static function fromArray(array $array): SearchMessages
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_list']),
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

    public function getQuery(): string
    {
        return $this->query;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_list' => $this->chatList->typeSerialize(),
            'query' => $this->query,
            'offset' => $this->offset,
            'limit' => $this->limit,
            'filter' => $this->filter->typeSerialize(),
            'min_date' => $this->minDate,
            'max_date' => $this->maxDate,
        ];
    }
}
