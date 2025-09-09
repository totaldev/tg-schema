<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a media from a link preview album.
 */
class LinkPreviewAlbumMedia extends TdObject
{
    public const TYPE_NAME = 'LinkPreviewAlbumMedia';

    public function __construct() {}

    public static function fromArray(array $array): LinkPreviewAlbumMedia
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
