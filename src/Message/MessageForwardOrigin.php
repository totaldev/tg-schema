<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about the origin of a forwarded message
 */
class MessageForwardOrigin extends TdObject
{
    public const TYPE_NAME = 'MessageForwardOrigin';

    public function __construct()
    {
    }

    public static function fromArray(array $array): MessageForwardOrigin
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
