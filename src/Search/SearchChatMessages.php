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
    public const string TYPE_NAME = 'searchChatMessages';

    public function __construct(
        /**
         * Identifier of the chat in which to search messages.
         */
        protected int                   $chatId,
        /**
         * Identifier of the message starting from which history must be fetched; use 0 to get results from the last message.
         */
        protected int                   $fromMessageId,
        /**
         * The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, then the limit must be greater than -offset. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int                   $limit,
        /**
         * Specify 0 to get results from exactly the message from_message_id or a negative number to get the specified message and some newer messages.
         */
        protected int                   $offset,
        /**
         * Query to search for.
         */
        protected string                $query,
        /**
         * Additional filter for messages to search; pass null to search for all messages.
         */
        protected ?SearchMessagesFilter $filter = null,
        /**
         * Identifier of the sender of messages to search for; pass null to search for messages from any sender. Not supported in secret chats.
         */
        protected ?MessageSender        $senderId = null,
        /**
         * Pass topic identifier to search messages only in specific topic; pass null to search for messages in all topics.
         */
        protected ?MessageTopic         $topicId = null,
    ) {}

    public static function fromArray(array $array): SearchChatMessages
    {
        return new static(
            chatId       : $array['chat_id'],
            filter       : (isset($array['filter']) ? TdSchemaRegistry::fromArray($array['filter']) : null),
            fromMessageId: $array['from_message_id'],
            limit        : $array['limit'],
            offset       : $array['offset'],
            query        : $array['query'],
            senderId     : (isset($array['sender_id']) ? TdSchemaRegistry::fromArray($array['sender_id']) : null),
            topicId      : (isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null),
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

    public function getSenderId(): ?MessageSender
    {
        return $this->senderId;
    }

    public function getTopicId(): ?MessageTopic
    {
        return $this->topicId;
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

    public function setFromMessageId(int $value): static
    {
        $this->fromMessageId = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(int $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setQuery(string $value): static
    {
        $this->query = $value;

        return $this;
    }

    public function setSenderId(?MessageSender $value): static
    {
        $this->senderId = $value;

        return $this;
    }

    public function setTopicId(?MessageTopic $value): static
    {
        $this->topicId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'filter'          => (null !== $this->filter ? $this->filter->jsonSerialize() : null),
            'from_message_id' => $this->fromMessageId,
            'limit'           => $this->limit,
            'offset'          => $this->offset,
            'query'           => $this->query,
            'sender_id'       => (null !== $this->senderId ? $this->senderId->jsonSerialize() : null),
            'topic_id'        => (null !== $this->topicId ? $this->topicId->jsonSerialize() : null),
        ];
    }
}
