<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The user is recording a voice note.
 */
class ChatActionRecordingVoiceNote extends ChatAction
{
    public const TYPE_NAME = 'chatActionRecordingVoiceNote';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionRecordingVoiceNote
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
