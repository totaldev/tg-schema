<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The user is uploading a voice note.
 */
class ChatActionUploadingVoiceNote extends ChatAction
{
    public const TYPE_NAME = 'chatActionUploadingVoiceNote';

    public function __construct(
        /**
         * Upload progress, as a percentage.
         */
        protected int $progress
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionUploadingVoiceNote
    {
        return new static(
            $array['progress'],
        );
    }

    public function getProgress(): int
    {
        return $this->progress;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'progress' => $this->progress,
        ];
    }
}
