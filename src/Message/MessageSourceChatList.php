<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message is from a chat list or a forum topic list.
 */
class MessageSourceChatList extends MessageSource
{
    public const TYPE_NAME = 'messageSourceChatList';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSourceChatList
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
