<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the default message auto-delete time for new chats
 */
class SetDefaultMessageAutoDeleteTime extends TdFunction
{
    public const TYPE_NAME = 'setDefaultMessageAutoDeleteTime';

    /**
     * New default message auto-delete time; must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically
     *
     * @var MessageAutoDeleteTime
     */
    protected MessageAutoDeleteTime $messageAutoDeleteTime;

    public function __construct(MessageAutoDeleteTime $messageAutoDeleteTime)
    {
        $this->messageAutoDeleteTime = $messageAutoDeleteTime;
    }

    public static function fromArray(array $array): SetDefaultMessageAutoDeleteTime
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message_auto_delete_time']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message_auto_delete_time' => $this->messageAutoDeleteTime->typeSerialize(),
        ];
    }

    public function getMessageAutoDeleteTime(): MessageAutoDeleteTime
    {
        return $this->messageAutoDeleteTime;
    }
}
