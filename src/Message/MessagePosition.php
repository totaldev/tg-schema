<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a message in a specific position.
 */
class MessagePosition extends TdObject
{
    public const TYPE_NAME = 'messagePosition';

    public function __construct(
        /**
         * 0-based message position in the full list of suitable messages.
         */
        protected int $position,
        /**
         * Message identifier.
         */
        protected int $messageId,
        /**
         * Point in time (Unix timestamp) when the message was sent.
         */
        protected int $date
    ) {}

    public static function fromArray(array $array): MessagePosition
    {
        return new static(
            $array['position'],
            $array['message_id'],
            $array['date'],
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'position'   => $this->position,
            'message_id' => $this->messageId,
            'date'       => $this->date,
        ];
    }
}
