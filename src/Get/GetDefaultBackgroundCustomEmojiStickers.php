<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns default list of custom emoji stickers for reply background.
 */
class GetDefaultBackgroundCustomEmojiStickers extends TdFunction
{
    public const TYPE_NAME = 'getDefaultBackgroundCustomEmojiStickers';

    public function __construct() {}

    public static function fromArray(array $array): GetDefaultBackgroundCustomEmojiStickers
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
