<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns found forum topics in a forum supergroup chat or a chat with a bot with topics. This is a temporary method for getting information about topic list
 * from the server.
 */
class GetForumTopics extends TdFunction
{
    public const string TYPE_NAME = 'getForumTopics';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int    $chatId,
        /**
         * The maximum number of forum topics to be returned; up to 100. For optimal performance, the number of returned forum topics is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int    $limit,
        /**
         * The date starting from which the results need to be fetched. Use 0 or any date in the future to get results from the last topic.
         */
        protected int    $offsetDate,
        /**
         * The forum topic identifier of the last found topic, or 0 for the first request.
         */
        protected int    $offsetForumTopicId,
        /**
         * The message identifier of the last message in the last found topic, or 0 for the first request.
         */
        protected int    $offsetMessageId,
        /**
         * Query to search for in the forum topic's name.
         */
        protected string $query,
    ) {}

    public static function fromArray(array $array): GetForumTopics
    {
        return new static(
            chatId            : $array['chat_id'],
            limit             : $array['limit'],
            offsetDate        : $array['offset_date'],
            offsetForumTopicId: $array['offset_forum_topic_id'],
            offsetMessageId   : $array['offset_message_id'],
            query             : $array['query'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffsetDate(): int
    {
        return $this->offsetDate;
    }

    public function getOffsetForumTopicId(): int
    {
        return $this->offsetForumTopicId;
    }

    public function getOffsetMessageId(): int
    {
        return $this->offsetMessageId;
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

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffsetDate(int $value): static
    {
        $this->offsetDate = $value;

        return $this;
    }

    public function setOffsetForumTopicId(int $value): static
    {
        $this->offsetForumTopicId = $value;

        return $this;
    }

    public function setOffsetMessageId(int $value): static
    {
        $this->offsetMessageId = $value;

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
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'limit'                 => $this->limit,
            'offset_date'           => $this->offsetDate,
            'offset_forum_topic_id' => $this->offsetForumTopicId,
            'offset_message_id'     => $this->offsetMessageId,
            'query'                 => $this->query,
        ];
    }
}
