<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

/**
 * A bold text.
 */
class TextEntityTypeBold extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeBold';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeBold
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
