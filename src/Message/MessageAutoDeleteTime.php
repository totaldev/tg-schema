<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Contains default auto-delete timer setting for new chats.
 */
class MessageAutoDeleteTime extends TdObject
{
    public const string TYPE_NAME = 'messageAutoDeleteTime';

    public function __construct(
        /**
         * Message auto-delete time, in seconds. If 0, then messages aren't deleted automatically.
         */
        protected int $time
    ) {}

    public static function fromArray(array $array): MessageAutoDeleteTime
    {
        return new static(
            $array['time'],
        );
    }

    public function getTime(): int
    {
        return $this->time;
    }

    public function setTime(int $value): static
    {
        $this->time = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'time'  => $this->time,
        ];
    }
}
