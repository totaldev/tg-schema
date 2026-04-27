<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Keyboard;

use Totaldev\TgSchema\TdObject;

/**
 * Describes source of a keyboard button.
 */
class KeyboardButtonSource extends TdObject
{
    public const string TYPE_NAME = 'KeyboardButtonSource';

    public function __construct() {}

    public static function fromArray(array $array): KeyboardButtonSource
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
