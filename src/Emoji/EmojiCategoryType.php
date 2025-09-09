<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of emoji category.
 */
class EmojiCategoryType extends TdObject
{
    public const TYPE_NAME = 'EmojiCategoryType';

    public function __construct() {}

    public static function fromArray(array $array): EmojiCategoryType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
