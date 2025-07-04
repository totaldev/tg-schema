<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Message\MessageTopic;
use Totaldev\TgSchema\Search\SearchMessagesFilter;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about the next messages of the specified type in the chat split by days. Returns the results in reverse chronological order. Can return
 * partial result for the last returned day. Behavior of this method depends on the value of the option "utc_time_offset".
 */
class GetChatMessageCalendar extends TdFunction
{
    public const TYPE_NAME = 'getChatMessageCalendar';

    public function __construct(
        /**
         * Identifier of the chat in which to return information about messages.
         */
        protected int                  $chatId,
        /**
         * Pass topic identifier to get the result only in specific topic; pass null to get the result in all topics; forum topics aren't supported.
         */
        protected MessageTopic         $topicId,
        /**
         * Filter for message content. Filters searchMessagesFilterEmpty, searchMessagesFilterMention, searchMessagesFilterUnreadMention, and searchMessagesFilterUnreadReaction are unsupported in this function.
         */
        protected SearchMessagesFilter $filter,
        /**
         * The message identifier from which to return information about messages; use 0 to get results from the last message.
         */
        protected int                  $fromMessageId
    ) {}

    public static function fromArray(array $array): GetChatMessageCalendar
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['topic_id']),
            TdSchemaRegistry::fromArray($array['filter']),
            $array['from_message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFilter(): SearchMessagesFilter
    {
        return $this->filter;
    }

    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }

    public function getTopicId(): MessageTopic
    {
        return $this->topicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'topic_id'        => $this->topicId->typeSerialize(),
            'filter'          => $this->filter->typeSerialize(),
            'from_message_id' => $this->fromMessageId,
        ];
    }
}
