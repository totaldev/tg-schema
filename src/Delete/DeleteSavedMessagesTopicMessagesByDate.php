<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes all messages between the specified dates in a Saved Messages topic. Messages sent in the last 30 seconds will not be deleted.
 */
class DeleteSavedMessagesTopicMessagesByDate extends TdFunction
{
    public const TYPE_NAME = 'deleteSavedMessagesTopicMessagesByDate';

    public function __construct(
        /**
         * Identifier of Saved Messages topic which messages will be deleted.
         */
        protected int $savedMessagesTopicId,
        /**
         * The minimum date of the messages to delete.
         */
        protected int $minDate,
        /**
         * The maximum date of the messages to delete.
         */
        protected int $maxDate,
    ) {}

    public static function fromArray(array $array): DeleteSavedMessagesTopicMessagesByDate
    {
        return new static(
            $array['saved_messages_topic_id'],
            $array['min_date'],
            $array['max_date'],
        );
    }

    public function getMaxDate(): int
    {
        return $this->maxDate;
    }

    public function getMinDate(): int
    {
        return $this->minDate;
    }

    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'saved_messages_topic_id' => $this->savedMessagesTopicId,
            'min_date'                => $this->minDate,
            'max_date'                => $this->maxDate,
        ];
    }
}
