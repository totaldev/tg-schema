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
    public const string TYPE_NAME = 'getDirectMessagesChatTopicMessageByDate';

    public function __construct(
        /**
         * Chat identifier of the channel direct messages chat.
         */
        protected int $chatId,
        /**
         * Point in time (Unix timestamp) relative to which to search for messages.
         */
        protected int $date,
        /**
         * Identifier of the topic which messages will be fetched.
         */
        protected int $topicId,
    ) {}

    public static function fromArray(array $array): GetDirectMessagesChatTopicMessageByDate
    {
        return new static(
            chatId : $array['chat_id'],
            date   : $array['date'],
            topicId: $array['topic_id'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setTopicId(int $value): static
    {
        $this->topicId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'date'     => $this->date,
            'topic_id' => $this->topicId,
        ];
    }
}
