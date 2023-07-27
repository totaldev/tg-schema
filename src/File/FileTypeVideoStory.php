<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The file is a video published as a story
 */
class FileTypeVideoStory extends FileType
{
    public const TYPE_NAME = 'fileTypeVideoStory';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeVideoStory
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
