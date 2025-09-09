<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

/**
 * A hashtag text, beginning with "#" and optionally containing a chat username at the end.
 */
class TextEntityTypeHashtag extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeHashtag';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeHashtag
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
