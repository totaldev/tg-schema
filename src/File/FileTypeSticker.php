<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The file is a sticker
 */
class FileTypeSticker extends FileType
{
    public const TYPE_NAME = 'fileTypeSticker';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeSticker
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
