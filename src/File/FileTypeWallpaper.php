<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The file is a wallpaper or a background pattern
 */
class FileTypeWallpaper extends FileType
{
    public const TYPE_NAME = 'fileTypeWallpaper';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeWallpaper
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
