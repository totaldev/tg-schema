<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

/**
 * The file is a self-destructing voice note in a private chat.
 */
class FileTypeSelfDestructingVoiceNote extends FileType
{
    public const TYPE_NAME = 'fileTypeSelfDestructingVoiceNote';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeSelfDestructingVoiceNote
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
