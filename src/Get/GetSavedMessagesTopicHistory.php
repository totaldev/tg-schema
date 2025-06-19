<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns messages in a Saved Messages topic. The messages are returned in reverse chronological order (i.e., in order of decreasing message_id).
 */
class GetSavedMessagesTopicHistory extends TdFunction
{
    public const TYPE_NAME = 'getSavedMessagesTopicHistory';

    public function __construct(
        /**
         * Identifier of Saved Messages topic which messages will be fetched.
         */
        protected int $savedMessagesTopicId,
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

    public static function fromArray(array $array): GetSavedMessagesTopicHistory
    {
        return new static(
            $array['saved_messages_topic_id'],
            $array['from_message_id'],
            $array['offset'],
            $array['limit'],
        );
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

    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'saved_messages_topic_id' => $this->savedMessagesTopicId,
            'from_message_id'         => $this->fromMessageId,
            'offset'                  => $this->offset,
            'limit'                   => $this->limit,
        ];
    }
}
