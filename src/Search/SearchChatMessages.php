<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\Message\MessageTopic;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for messages with given words in the chat. Returns the results in reverse chronological order, i.e. in order of decreasing message_id. Cannot be
 * used in secret chats with a non-empty query (searchSecretMessages must be used instead), or without an enabled message database. For optimal performance,
 * the number of returned messages is chosen by TDLib and can be smaller than the specified limit. A combination of query, sender_id, filter and topic_id
 * search criteria is expected to be supported, only if it is required for Telegram official application implementation.
 */
class SearchChatMessages extends TdFunction
{
    public const TYPE_NAME = 'searchChatMessages';

    public function __construct(
        /**
         * Identifier of the chat in which to search messages.
         */
        protected int                  $chatId,
        /**
         * Pass topic identifier to search messages only in specific topic; pass null to search for messages in all topics.
         */
        protected MessageTopic         $topicId,
        /**
         * Query to search for.
         */
        protected string               $query,
        /**
         * Identifier of the sender of messages to search for; pass null to search for messages from any sender. Not supported in secret chats.
         */
        protected MessageSender        $senderId,
        /**
         * Identifier of the message starting from which history must be fetched; use 0 to get results from the last message.
         */
        protected int                  $fromMessageId,
        /**
         * Specify 0 to get results from exactly the message from_message_id or a negative offset to get the specified message and some newer messages.
         */
        protected int                  $offset,
        /**
         * The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than -offset. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int                  $limit,
        /**
         * Additional filter for messages to search; pass null to search for all messages.
         */
        protected SearchMessagesFilter $filter,
    ) {}

    public static function fromArray(array $array): SearchChatMessages
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['topic_id']),
            $array['query'],
            TdSchemaRegistry::fromArray($array['sender_id']),
            $array['from_message_id'],
            $array['offset'],
            $array['limit'],
            TdSchemaRegistry::fromArray($array['filter']),
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

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
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
            'query'           => $this->query,
            'sender_id'       => $this->senderId->typeSerialize(),
            'from_message_id' => $this->fromMessageId,
            'offset'          => $this->offset,
            'limit'           => $this->limit,
            'filter'          => $this->filter->typeSerialize(),
        ];
    }
}
