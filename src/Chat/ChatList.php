<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a list of chats.
 */
class ChatList extends TdObject
{
    public const TYPE_NAME = 'ChatList';

    public function __construct() {}

    public static function fromArray(array $array): ChatList
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
