<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a chat theme to set.
 */
class InputChatTheme extends TdObject
{
    public const TYPE_NAME = 'InputChatTheme';

    public function __construct() {}

    public static function fromArray(array $array): InputChatTheme
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
