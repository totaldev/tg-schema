<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Language;

use Totaldev\TgSchema\TdObject;

/**
 * Represents the value of a string in a language pack.
 */
class LanguagePackStringValue extends TdObject
{
    public const TYPE_NAME = 'LanguagePackStringValue';

    public function __construct() {}

    public static function fromArray(array $array): LanguagePackStringValue
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
