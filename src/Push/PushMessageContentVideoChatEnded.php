<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A video chat or live stream has ended.
 */
class PushMessageContentVideoChatEnded extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentVideoChatEnded';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentVideoChatEnded
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
