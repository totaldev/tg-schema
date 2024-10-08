<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Option;

use Totaldev\TgSchema\TdObject;

/**
 * Represents the value of an option.
 */
class OptionValue extends TdObject
{
    public const TYPE_NAME = 'OptionValue';

    public function __construct() {}

    public static function fromArray(array $array): OptionValue
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
