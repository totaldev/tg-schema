<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

/**
 * The file is a self-destructing photo in a private chat.
 */
class FileTypeSelfDestructingPhoto extends FileType
{
    public const TYPE_NAME = 'fileTypeSelfDestructingPhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeSelfDestructingPhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
