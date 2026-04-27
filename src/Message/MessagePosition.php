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
    public const string TYPE_NAME = 'messagePosition';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the message was sent.
         */
        protected int $date,
        /**
         * Message identifier.
         */
        protected int $messageId,
        /**
         * 0-based message position in the full list of suitable messages.
         */
        protected int $position,
    ) {}

    public static function fromArray(array $array): MessagePosition
    {
        return new static(
            date     : $array['date'],
            messageId: $array['message_id'],
            position : $array['position'],
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

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setPosition(int $value): static
    {
        $this->position = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'date'       => $this->date,
            'message_id' => $this->messageId,
            'position'   => $this->position,
        ];
    }
}
