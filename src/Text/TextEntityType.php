<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a part of the text which must be formatted differently
 */
class TextEntityType extends TdObject
{
    public const TYPE_NAME = 'TextEntityType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): TextEntityType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
