<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A video chat or live stream was started.
 */
class PushMessageContentVideoChatStarted extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentVideoChatStarted';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentVideoChatStarted
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
