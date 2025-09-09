<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Describes read date of a recent outgoing message in a private chat.
 */
class MessageReadDate extends TdObject
{
    public const TYPE_NAME = 'MessageReadDate';

    public function __construct() {}

    public static function fromArray(array $array): MessageReadDate
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
