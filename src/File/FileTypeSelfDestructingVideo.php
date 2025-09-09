<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

/**
 * The file is a self-destructing video in a private chat.
 */
class FileTypeSelfDestructingVideo extends FileType
{
    public const TYPE_NAME = 'fileTypeSelfDestructingVideo';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeSelfDestructingVideo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
