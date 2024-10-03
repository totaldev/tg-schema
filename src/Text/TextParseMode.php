<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the way the text needs to be parsed for text entities.
 */
class TextParseMode extends TdObject
{
    public const TYPE_NAME = 'TextParseMode';

    public function __construct() {}

    public static function fromArray(array $array): TextParseMode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
