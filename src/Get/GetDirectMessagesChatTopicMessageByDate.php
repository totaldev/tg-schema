<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the last message sent in the topic in a channel direct messages chat administered by the current user no later than the specified date.
 */
class GetDirectMessagesChatTopicMessageByDate extends TdFunction
{
    public const TYPE_NAME = 'getDirectMessagesChatTopicMessageByDate';

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
         * Point in time (Unix timestamp) relative to which to search for messages.
         */
        protected int $date
    ) {}

    public static function fromArray(array $array): GetDirectMessagesChatTopicMessageByDate
    {
        return new static(
            $array['chat_id'],
            $array['topic_id'],
            $array['date'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getTopicId(): int
    {
        return $this->topicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'topic_id' => $this->topicId,
            'date'     => $this->date,
        ];
    }
}
