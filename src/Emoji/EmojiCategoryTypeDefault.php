<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

/**
 * The category must be used by default (e.g., for custom emoji or animation search).
 */
class EmojiCategoryTypeDefault extends EmojiCategoryType
{
    public const TYPE_NAME = 'emojiCategoryTypeDefault';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): EmojiCategoryTypeDefault
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
