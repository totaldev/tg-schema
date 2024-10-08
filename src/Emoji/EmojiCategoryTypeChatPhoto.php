<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

/**
 * The category must be used for chat photo emoji selection.
 */
class EmojiCategoryTypeChatPhoto extends EmojiCategoryType
{
    public const TYPE_NAME = 'emojiCategoryTypeChatPhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): EmojiCategoryTypeChatPhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
