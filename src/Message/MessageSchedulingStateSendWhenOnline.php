<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message will be sent when the other user is online. Applicable to private chats only and when the exact online status of the other user is known.
 */
class MessageSchedulingStateSendWhenOnline extends MessageSchedulingState
{
    public const TYPE_NAME = 'messageSchedulingStateSendWhenOnline';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSchedulingStateSendWhenOnline
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
