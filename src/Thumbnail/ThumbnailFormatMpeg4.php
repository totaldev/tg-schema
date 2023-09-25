<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Thumbnail;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The thumbnail is in MPEG4 format. It will be used only for some animations and videos
 */
class ThumbnailFormatMpeg4 extends ThumbnailFormat
{
    public const TYPE_NAME = 'thumbnailFormatMpeg4';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ThumbnailFormatMpeg4
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
