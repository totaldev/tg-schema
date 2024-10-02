<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Describes when a message will be self-destructed.
 */
class MessageSelfDestructType extends TdObject
{
    public const TYPE_NAME = 'MessageSelfDestructType';

    public function __construct() {}

    public static function fromArray(array $array): MessageSelfDestructType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
