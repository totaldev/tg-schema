<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * Contains read date of the message.
 */
class MessageReadDateRead extends MessageReadDate
{
    public const TYPE_NAME = 'messageReadDateRead';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the message was read by the other user.
         */
        protected int $readDate
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageReadDateRead
    {
        return new static(
            $array['read_date'],
        );
    }

    public function getReadDate(): int
    {
        return $this->readDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'read_date' => $this->readDate,
        ];
    }
}
