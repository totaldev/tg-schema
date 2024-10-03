<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

/**
 * The file is a video.
 */
class FileTypeVideo extends FileType
{
    public const TYPE_NAME = 'fileTypeVideo';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeVideo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
