<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a chat theme.
 */
class ChatTheme extends TdObject
{
    public const string TYPE_NAME = 'ChatTheme';

    public function __construct() {}

    public static function fromArray(array $array): ChatTheme
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
