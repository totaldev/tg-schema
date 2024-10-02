<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A new member was accepted to the chat by an administrator.
 */
class PushMessageContentChatJoinByRequest extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentChatJoinByRequest';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChatJoinByRequest
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
