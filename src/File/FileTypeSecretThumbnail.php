<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

/**
 * The file is a thumbnail of a file from a secret chat.
 */
class FileTypeSecretThumbnail extends FileType
{
    public const TYPE_NAME = 'fileTypeSecretThumbnail';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeSecretThumbnail
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
