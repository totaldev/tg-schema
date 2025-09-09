<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Describes source of a message.
 */
class MessageSource extends TdObject
{
    public const TYPE_NAME = 'MessageSource';

    public function __construct() {}

    public static function fromArray(array $array): MessageSource
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
