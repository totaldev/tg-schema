<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

/**
 * The category must be used by default for regular sticker selection. It may contain greeting emoji category and premium stickers.
 */
class EmojiCategoryTypeRegularStickers extends EmojiCategoryType
{
    public const TYPE_NAME = 'emojiCategoryTypeRegularStickers';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): EmojiCategoryTypeRegularStickers
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
