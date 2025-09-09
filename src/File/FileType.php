<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\TdObject;

/**
 * Represents the type of file.
 */
class FileType extends TdObject
{
    public const TYPE_NAME = 'FileType';

    public function __construct() {}

    public static function fromArray(array $array): FileType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
