<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The user is recording a video.
 */
class ChatActionRecordingVideo extends ChatAction
{
    public const TYPE_NAME = 'chatActionRecordingVideo';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionRecordingVideo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
