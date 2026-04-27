<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

/**
 * The file is a video for a live photo.
 */
class FileTypeLivePhotoVideo extends FileType
{
    public const string TYPE_NAME = 'fileTypeLivePhotoVideo';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeLivePhotoVideo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
