<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

/**
 * A strikethrough text.
 */
class TextEntityTypeStrikethrough extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeStrikethrough';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeStrikethrough
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
