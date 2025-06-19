<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns messages in the topic in a channel direct messages chat administered by the current user. The messages are returned in reverse chronological order
 * (i.e., in order of decreasing message_id).
 */
class GetDirectMessagesChatTopicHistory extends TdFunction
{
    public const TYPE_NAME = 'getDirectMessagesChatTopicHistory';

    public function __construct(
        /**
         * Chat identifier of the channel direct messages chat.
         */
        protected int $chatId,
        /**
         * Identifier of the topic which messages will be fetched.
         */
        protected int $topicId,
        /**
         * Identifier of the message starting from which messages must be fetched; use 0 to get results from the last message.
         */
        protected int $fromMessageId,
        /**
         * Specify 0 to get results from exactly the message from_message_id or a negative offset up to 99 to get additionally some newer messages.
         */
        protected int $offset,
        /**
         * The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than or equal to -offset. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int $limit
    ) {}

    public static function fromArray(array $array): GetDirectMessagesChatTopicHistory
    {
        return new static(
            $array['chat_id'],
            $array['topic_id'],
            $array['from_message_id'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
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

    public function getTopicId(): int
    {
        return $this->topicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'topic_id'        => $this->topicId,
            'from_message_id' => $this->fromMessageId,
            'offset'          => $this->offset,
            'limit'           => $this->limit,
        ];
    }
}
