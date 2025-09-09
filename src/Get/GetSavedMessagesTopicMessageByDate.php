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
    public const TYPE_NAME = 'getSavedMessagesTopicMessageByDate';

    public function __construct(
        /**
         * Identifier of Saved Messages topic which message will be returned.
         */
        protected int $savedMessagesTopicId,
        /**
         * Point in time (Unix timestamp) relative to which to search for messages.
         */
        protected int $date,
    ) {}

    public static function fromArray(array $array): GetSavedMessagesTopicMessageByDate
    {
        return new static(
            $array['saved_messages_topic_id'],
            $array['date'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'saved_messages_topic_id' => $this->savedMessagesTopicId,
            'date'                    => $this->date,
        ];
    }
}
