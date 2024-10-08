<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * A main list of chats.
 */
class ChatListMain extends ChatList
{
    public const TYPE_NAME = 'chatListMain';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatListMain
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
