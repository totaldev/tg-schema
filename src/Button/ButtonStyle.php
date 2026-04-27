<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Button;

use Totaldev\TgSchema\TdObject;

/**
 * Describes style of a button.
 */
class ButtonStyle extends TdObject
{
    public const string TYPE_NAME = 'ButtonStyle';

    public function __construct() {}

    public static function fromArray(array $array): ButtonStyle
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
