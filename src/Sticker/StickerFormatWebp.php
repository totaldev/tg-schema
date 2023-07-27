<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Sticker;

/**
 * The sticker is an image in WEBP format
 */
class StickerFormatWebp extends StickerFormat
{
    public const TYPE_NAME = 'stickerFormatWebp';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StickerFormatWebp
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
