<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Returns default list of custom emoji stickers for placing on a chat photo
 */
class GetDefaultChatPhotoCustomEmojiStickers extends TdFunction
{
    public const TYPE_NAME = 'getDefaultChatPhotoCustomEmojiStickers';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetDefaultChatPhotoCustomEmojiStickers
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
