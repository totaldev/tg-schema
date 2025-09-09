<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

/**
 * Text that must be formatted as if inside a blockquote HTML tag; not supported in secret chats.
 */
class TextEntityTypeBlockQuote extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeBlockQuote';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeBlockQuote
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
