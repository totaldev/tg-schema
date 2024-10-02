<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdObject;

/**
 * Contains content of a push message notification.
 */
class PushMessageContent extends TdObject
{
    public const TYPE_NAME = 'PushMessageContent';

    public function __construct() {}

    public static function fromArray(array $array): PushMessageContent
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
