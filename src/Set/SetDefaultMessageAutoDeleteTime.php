<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Message\MessageAutoDeleteTime;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the default message auto-delete time for new chats.
 */
class SetDefaultMessageAutoDeleteTime extends TdFunction
{
    public const TYPE_NAME = 'setDefaultMessageAutoDeleteTime';

    public function __construct(
        /**
         * New default message auto-delete time; must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically.
         */
        protected MessageAutoDeleteTime $messageAutoDeleteTime
    ) {}

    public static function fromArray(array $array): SetDefaultMessageAutoDeleteTime
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message_auto_delete_time']),
        );
    }

    public function getMessageAutoDeleteTime(): MessageAutoDeleteTime
    {
        return $this->messageAutoDeleteTime;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'message_auto_delete_time' => $this->messageAutoDeleteTime->typeSerialize(),
        ];
    }
}
