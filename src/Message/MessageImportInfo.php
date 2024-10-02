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
    public const TYPE_NAME = 'messageImportInfo';

    public function __construct(
        /**
         * Name of the original sender.
         */
        protected string $senderName,
        /**
         * Point in time (Unix timestamp) when the message was originally sent.
         */
        protected int    $date,
    ) {}

    public static function fromArray(array $array): MessageImportInfo
    {
        return new static(
            $array['sender_name'],
            $array['date'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'sender_name' => $this->senderName,
            'date'        => $this->date,
        ];
    }
}
