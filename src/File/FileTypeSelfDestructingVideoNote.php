<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

/**
 * The file is a self-destructing video note in a private chat.
 */
class FileTypeSelfDestructingVideoNote extends FileType
{
    public const TYPE_NAME = 'fileTypeSelfDestructingVideoNote';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeSelfDestructingVideoNote
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
