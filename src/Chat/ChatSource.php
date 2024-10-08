<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a reason why an external chat is shown in a chat list.
 */
class ChatSource extends TdObject
{
    public const TYPE_NAME = 'ChatSource';

    public function __construct() {}

    public static function fromArray(array $array): ChatSource
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
