<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Contains information about the message or the story a message is replying to
 */
class MessageReplyTo extends TdObject
{
    public const TYPE_NAME = 'MessageReplyTo';

    public function __construct()
    {
    }

    public static function fromArray(array $array): MessageReplyTo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
