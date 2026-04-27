<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a message created with importMessages.
 */
class MessageImportInfo extends TdObject
{
    public const string TYPE_NAME = 'messageImportInfo';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the message was originally sent.
         */
        protected int    $date,
        /**
         * Name of the original sender.
         */
        protected string $senderName,
    ) {}

    public static function fromArray(array $array): MessageImportInfo
    {
        return new static(
            date      : $array['date'],
            senderName: $array['sender_name'],
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getSenderName(): string
    {
        return $this->senderName;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setSenderName(string $value): static
    {
        $this->senderName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'date'        => $this->date,
            'sender_name' => $this->senderName,
        ];
    }
}
