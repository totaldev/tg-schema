<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

/**
 * A spoiler text.
 */
class TextEntityTypeSpoiler extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeSpoiler';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeSpoiler
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
