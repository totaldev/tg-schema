<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

/**
 * An HTTP URL.
 */
class TextEntityTypeUrl extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeUrl';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeUrl
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
