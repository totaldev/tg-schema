<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sticker;

/**
 * The sticker is a regular sticker.
 */
class StickerTypeRegular extends StickerType
{
    public const TYPE_NAME = 'stickerTypeRegular';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StickerTypeRegular
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
