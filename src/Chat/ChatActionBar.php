<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes actions which must be possible to do through a chat action bar.
 */
class ChatActionBar extends TdObject
{
    public const TYPE_NAME = 'ChatActionBar';

    public function __construct() {}

    public static function fromArray(array $array): ChatActionBar
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
