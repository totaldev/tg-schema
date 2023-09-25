<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Thumbnail;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The thumbnail is in JPEG format
 */
class ThumbnailFormatJpeg extends ThumbnailFormat
{
    public const TYPE_NAME = 'thumbnailFormatJpeg';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ThumbnailFormatJpeg
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
