<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The file is a thumbnail of another file
 */
class FileTypeThumbnail extends FileType
{
    public const TYPE_NAME = 'fileTypeThumbnail';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeThumbnail
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
