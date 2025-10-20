<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The user is uploading a photo.
 */
class ChatActionUploadingPhoto extends ChatAction
{
    public const TYPE_NAME = 'chatActionUploadingPhoto';

    public function __construct(
        /**
         * Upload progress, as a percentage.
         */
        protected int $progress
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionUploadingPhoto
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
