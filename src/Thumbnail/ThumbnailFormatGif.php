<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Thumbnail;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The thumbnail is in static GIF format. It will be used only for some bot inline query results
 */
class ThumbnailFormatGif extends ThumbnailFormat
{
    public const TYPE_NAME = 'thumbnailFormatGif';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ThumbnailFormatGif
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
