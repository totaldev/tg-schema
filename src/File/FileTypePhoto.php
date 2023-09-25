<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The file is a photo
 */
class FileTypePhoto extends FileType
{
    public const TYPE_NAME = 'fileTypePhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypePhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
