<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

/**
 * The category contains premium stickers that must be found by getPremiumStickers.
 */
class EmojiCategorySourcePremium extends EmojiCategorySource
{
    public const TYPE_NAME = 'emojiCategorySourcePremium';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): EmojiCategorySourcePremium
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
