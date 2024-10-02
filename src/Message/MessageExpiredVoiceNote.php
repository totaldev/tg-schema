<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A self-destructed voice note message.
 */
class MessageExpiredVoiceNote extends MessageContent
{
    public const TYPE_NAME = 'messageExpiredVoiceNote';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageExpiredVoiceNote
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
