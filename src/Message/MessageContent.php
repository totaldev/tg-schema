<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Contains the content of a message.
 */
class MessageContent extends TdObject
{
    public const TYPE_NAME = 'MessageContent';

    public function __construct() {}

    public static function fromArray(array $array): MessageContent
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
