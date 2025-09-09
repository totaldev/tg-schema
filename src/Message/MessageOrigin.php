<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about the origin of a message.
 */
class MessageOrigin extends TdObject
{
    public const TYPE_NAME = 'MessageOrigin';

    public function __construct() {}

    public static function fromArray(array $array): MessageOrigin
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
