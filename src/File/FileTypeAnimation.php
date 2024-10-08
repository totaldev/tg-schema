<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

/**
 * The file is an animation.
 */
class FileTypeAnimation extends FileType
{
    public const TYPE_NAME = 'fileTypeAnimation';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeAnimation
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
