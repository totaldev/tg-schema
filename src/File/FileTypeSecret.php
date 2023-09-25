<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The file was sent to a secret chat (the file type is not known to the server)
 */
class FileTypeSecret extends FileType
{
    public const TYPE_NAME = 'fileTypeSecret';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeSecret
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
