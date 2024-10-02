<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Thumbnail;

/**
 * The thumbnail is in TGS format. It will be used only for sticker sets.
 */
class ThumbnailFormatTgs extends ThumbnailFormat
{
    public const TYPE_NAME = 'thumbnailFormatTgs';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ThumbnailFormatTgs
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
