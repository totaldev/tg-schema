<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of an emoji category
 */
class EmojiCategoryType extends TdObject
{
    public const TYPE_NAME = 'EmojiCategoryType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): EmojiCategoryType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
