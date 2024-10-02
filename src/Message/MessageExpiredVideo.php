<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A self-destructed video message.
 */
class MessageExpiredVideo extends MessageContent
{
    public const TYPE_NAME = 'messageExpiredVideo';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageExpiredVideo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
