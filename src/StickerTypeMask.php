<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The sticker is a mask in WEBP format to be placed on photos or videos
 */
class StickerTypeMask extends StickerType
{
    public const TYPE_NAME = 'stickerTypeMask';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StickerTypeMask
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
