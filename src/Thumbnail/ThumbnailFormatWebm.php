<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Thumbnail;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The thumbnail is in WEBM format. It will be used only for WEBM sticker sets
 */
class ThumbnailFormatWebm extends ThumbnailFormat
{
    public const TYPE_NAME = 'thumbnailFormatWebm';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ThumbnailFormatWebm
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
