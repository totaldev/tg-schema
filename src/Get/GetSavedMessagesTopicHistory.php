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
    public const string TYPE_NAME = 'getSavedMessagesTopicHistory';

    public function __construct(
        /**
         * Identifier of the message starting from which messages must be fetched; use 0 to get results from the last message.
         */
        protected int $fromMessageId,
        /**
         * The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, then the limit must be greater than or equal to -offset. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int $limit,
        /**
         * Specify 0 to get results from exactly the message from_message_id or a negative number from -99 to -1 to get additionally -offset newer messages.
         */
        protected int $offset,
        /**
         * Identifier of Saved Messages topic which messages will be fetched.
         */
        protected int $savedMessagesTopicId,
    ) {}

    public static function fromArray(array $array): GetSavedMessagesTopicHistory
    {
        return new static(
            fromMessageId       : $array['from_message_id'],
            limit               : $array['limit'],
            offset              : $array['offset'],
            savedMessagesTopicId: $array['saved_messages_topic_id'],
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

    public function setFromMessageId(int $value): static
    {
        $this->fromMessageId = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(int $value): static
    {
        $this->offset = $value;

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
            'from_message_id'         => $this->fromMessageId,
            'limit'                   => $this->limit,
            'offset'                  => $this->offset,
            'saved_messages_topic_id' => $this->savedMessagesTopicId,
        ];
    }
}
