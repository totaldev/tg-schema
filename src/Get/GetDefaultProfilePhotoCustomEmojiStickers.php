<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns default list of custom emoji stickers for placing on a profile photo.
 */
class GetDefaultProfilePhotoCustomEmojiStickers extends TdFunction
{
    public const TYPE_NAME = 'getDefaultProfilePhotoCustomEmojiStickers';

    public function __construct() {}

    public static function fromArray(array $array): GetDefaultProfilePhotoCustomEmojiStickers
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
