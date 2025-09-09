<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message is unread yet.
 */
class MessageReadDateUnread extends MessageReadDate
{
    public const TYPE_NAME = 'messageReadDateUnread';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageReadDateUnread
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
