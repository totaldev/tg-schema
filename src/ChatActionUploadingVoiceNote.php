<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * The user is uploading a voice note.
 */
class ChatActionUploadingVoiceNote extends ChatAction
{
    public const TYPE_NAME = 'chatActionUploadingVoiceNote';

    /**
     * Upload progress, as a percentage.
     */
    protected int $progress;

    public function __construct(int $progress)
    {
        parent::__construct();

        $this->progress = $progress;
    }

    public static function fromArray(array $array): ChatActionUploadingVoiceNote
    {
        return new static(
            $array['progress'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'progress' => $this->progress,
        ];
    }

    public function getProgress(): int
    {
        return $this->progress;
    }
}
