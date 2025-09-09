<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;

/**
 * Describes source of stickers for an emoji category.
 */
class EmojiCategorySource extends TdObject
{
    public const TYPE_NAME = 'EmojiCategorySource';

    public function __construct() {}

    public static function fromArray(array $array): EmojiCategorySource
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
