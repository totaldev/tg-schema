<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new member was accepted to the chat by an administrator
 */
class MessageChatJoinByRequest extends MessageContent
{
    public const TYPE_NAME = 'messageChatJoinByRequest';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatJoinByRequest
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
