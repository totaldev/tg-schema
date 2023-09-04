<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The file is a photo published as a story
 */
class FileTypePhotoStory extends FileType
{
    public const TYPE_NAME = 'fileTypePhotoStory';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypePhotoStory
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
