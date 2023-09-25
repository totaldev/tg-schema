<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Keyboard;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a keyboard button type
 */
class KeyboardButtonType extends TdObject
{
    public const TYPE_NAME = 'KeyboardButtonType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): KeyboardButtonType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
