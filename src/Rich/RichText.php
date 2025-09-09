<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a formatted text object.
 */
class RichText extends TdObject
{
    public const TYPE_NAME = 'RichText';

    public function __construct() {}

    public static function fromArray(array $array): RichText
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
