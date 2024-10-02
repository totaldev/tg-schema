<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for messages with given words in the chat. Returns the results in reverse chronological order, i.e. in order of decreasing message_id. Cannot be
 * used in secret chats with a non-empty query (searchSecretMessages must be used instead), or without an enabled message database. For optimal performance,
 * the number of returned messages is chosen by TDLib and can be smaller than the specified limit. A combination of query, sender_id, filter and
 * message_thread_id search criteria is expected to be supported, only if it is required for Telegram official application implementation.
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
        /**
         * If not 0, only messages in the specified thread will be returned; supergroups only.
         */
        protected int                  $messageThreadId,
        /**
         * If not 0, only messages in the specified Saved Messages topic will be returned; pass 0 to return all messages, or for chats other than Saved Messages.
         */
        protected int                  $savedMessagesTopicId,
    ) {}

    public static function fromArray(array $array): SearchChatMessages
    {
        return new static(
            $array['chat_id'],
            $array['query'],
            TdSchemaRegistry::fromArray($array['sender_id']),
            $array['from_message_id'],
            $array['offset'],
            $array['limit'],
            TdSchemaRegistry::fromArray($array['filter']),
            $array['message_thread_id'],
            $array['saved_messages_topic_id'],
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

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'chat_id'                 => $this->chatId,
            'query'                   => $this->query,
            'sender_id'               => $this->senderId->typeSerialize(),
            'from_message_id'         => $this->fromMessageId,
            'offset'                  => $this->offset,
            'limit'                   => $this->limit,
            'filter'                  => $this->filter->typeSerialize(),
            'message_thread_id'       => $this->messageThreadId,
            'saved_messages_topic_id' => $this->savedMessagesTopicId,
        ];
    }
}
