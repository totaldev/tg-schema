<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A contact has registered with Telegram.
 */
class PushMessageContentContactRegistered extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentContactRegistered';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentContactRegistered
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
