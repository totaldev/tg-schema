<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes all messages between the specified dates in the topic in a channel direct messages chat administered by the current user. Messages sent in the last
 * 30 seconds will not be deleted.
 */
class DeleteDirectMessagesChatTopicMessagesByDate extends TdFunction
{
    public const string TYPE_NAME = 'deleteDirectMessagesChatTopicMessagesByDate';

    public function __construct(
        /**
         * Chat identifier of the channel direct messages chat.
         */
        protected int $chatId,
        /**
         * The maximum date of the messages to delete.
         */
        protected int $maxDate,
        /**
         * The minimum date of the messages to delete.
         */
        protected int $minDate,
        /**
         * Identifier of the topic which messages will be deleted.
         */
        protected int $topicId,
    ) {}

    public static function fromArray(array $array): DeleteDirectMessagesChatTopicMessagesByDate
    {
        return new static(
            chatId : $array['chat_id'],
            maxDate: $array['max_date'],
            minDate: $array['min_date'],
            topicId: $array['topic_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMaxDate(): int
    {
        return $this->maxDate;
    }

    public function getMinDate(): int
    {
        return $this->minDate;
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

    public function setMaxDate(int $value): static
    {
        $this->maxDate = $value;

        return $this;
    }

    public function setMinDate(int $value): static
    {
        $this->minDate = $value;

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
            'max_date' => $this->maxDate,
            'min_date' => $this->minDate,
            'topic_id' => $this->topicId,
        ];
    }
}
