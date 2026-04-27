<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

/**
 * The file is a self-destructing video for a live photo in a private chat.
 */
class FileTypeSelfDestructingLivePhotoVideo extends FileType
{
    public const string TYPE_NAME = 'fileTypeSelfDestructingLivePhotoVideo';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeSelfDestructingLivePhotoVideo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
