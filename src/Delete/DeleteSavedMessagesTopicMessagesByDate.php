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
    public const string TYPE_NAME = 'deleteSavedMessagesTopicMessagesByDate';

    public function __construct(
        /**
         * The maximum date of the messages to delete.
         */
        protected int $maxDate,
        /**
         * The minimum date of the messages to delete.
         */
        protected int $minDate,
        /**
         * Identifier of Saved Messages topic which messages will be deleted.
         */
        protected int $savedMessagesTopicId,
    ) {}

    public static function fromArray(array $array): DeleteSavedMessagesTopicMessagesByDate
    {
        return new static(
            maxDate             : $array['max_date'],
            minDate             : $array['min_date'],
            savedMessagesTopicId: $array['saved_messages_topic_id'],
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

    public function setSavedMessagesTopicId(int $value): static
    {
        $this->savedMessagesTopicId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'max_date'                => $this->maxDate,
            'min_date'                => $this->minDate,
            'saved_messages_topic_id' => $this->savedMessagesTopicId,
        ];
    }
}
