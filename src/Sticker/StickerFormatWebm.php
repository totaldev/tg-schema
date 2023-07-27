<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Sticker;

/**
 * The sticker is a video in WEBM format
 */
class StickerFormatWebm extends StickerFormat
{
    public const TYPE_NAME = 'stickerFormatWebm';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StickerFormatWebm
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
