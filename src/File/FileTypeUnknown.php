<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

/**
 * The file type is not yet known.
 */
class FileTypeUnknown extends FileType
{
    public const TYPE_NAME = 'fileTypeUnknown';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeUnknown
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
