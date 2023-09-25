<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The file is a voice note
 */
class FileTypeVoiceNote extends FileType
{
    public const TYPE_NAME = 'fileTypeVoiceNote';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeVoiceNote
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
