<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Thumbnail;

/**
 * The thumbnail is in WEBP format. It will be used only for some stickers and sticker sets.
 */
class ThumbnailFormatWebp extends ThumbnailFormat
{
    public const TYPE_NAME = 'thumbnailFormatWebp';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ThumbnailFormatWebp
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
