<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Built;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a built-in theme of an official application.
 */
class BuiltInTheme extends TdObject
{
    public const string TYPE_NAME = 'BuiltInTheme';

    public function __construct() {}

    public static function fromArray(array $array): BuiltInTheme
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
