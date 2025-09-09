<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sticker;

/**
 * The sticker is a custom emoji to be used inside message text and caption.
 */
class StickerTypeCustomEmoji extends StickerType
{
    public const TYPE_NAME = 'stickerTypeCustomEmoji';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StickerTypeCustomEmoji
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
