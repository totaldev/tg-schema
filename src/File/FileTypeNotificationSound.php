<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

/**
 * The file is a notification sound.
 */
class FileTypeNotificationSound extends FileType
{
    public const TYPE_NAME = 'fileTypeNotificationSound';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeNotificationSound
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
