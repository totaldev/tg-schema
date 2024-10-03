<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

/**
 * The file is a profile photo.
 */
class FileTypeProfilePhoto extends FileType
{
    public const TYPE_NAME = 'fileTypeProfilePhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeProfilePhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
