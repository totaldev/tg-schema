<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The user is recording a video note.
 */
class ChatActionRecordingVideoNote extends ChatAction
{
    public const TYPE_NAME = 'chatActionRecordingVideoNote';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionRecordingVideoNote
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
