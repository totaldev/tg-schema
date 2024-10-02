<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

/**
 * The file is an audio file.
 */
class FileTypeAudio extends FileType
{
    public const TYPE_NAME = 'fileTypeAudio';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeAudio
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
