<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the last message sent in a Saved Messages topic no later than the specified date.
 */
class GetSavedMessagesTopicMessageByDate extends TdFunction
{
    public const string TYPE_NAME = 'getSavedMessagesTopicMessageByDate';

    public function __construct(
        /**
         * Point in time (Unix timestamp) relative to which to search for messages.
         */
        protected int $date,
        /**
         * Identifier of Saved Messages topic which message will be returned.
         */
        protected int $savedMessagesTopicId,
    ) {}

    public static function fromArray(array $array): GetSavedMessagesTopicMessageByDate
    {
        return new static(
            date                : $array['date'],
            savedMessagesTopicId: $array['saved_messages_topic_id'],
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

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
            'date'                    => $this->date,
            'saved_messages_topic_id' => $this->savedMessagesTopicId,
        ];
    }
}
