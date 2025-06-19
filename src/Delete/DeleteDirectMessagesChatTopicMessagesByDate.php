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
    public const TYPE_NAME = 'deleteDirectMessagesChatTopicMessagesByDate';

    public function __construct(
        /**
         * Chat identifier of the channel direct messages chat.
         */
        protected int $chatId,
        /**
         * Identifier of the topic which messages will be deleted.
         */
        protected int $topicId,
        /**
         * The minimum date of the messages to delete.
         */
        protected int $minDate,
        /**
         * The maximum date of the messages to delete.
         */
        protected int $maxDate
    ) {}

    public static function fromArray(array $array): DeleteDirectMessagesChatTopicMessagesByDate
    {
        return new static(
            $array['chat_id'],
            $array['topic_id'],
            $array['min_date'],
            $array['max_date'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'topic_id' => $this->topicId,
            'min_date' => $this->minDate,
            'max_date' => $this->maxDate,
        ];
    }
}
