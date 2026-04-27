<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes cover of a video story. Can be called only if story.can_be_edited == true and the story isn't being edited now.
 */
class EditStoryCover extends TdFunction
{
    public const string TYPE_NAME = 'editStoryCover';

    public function __construct(
        /**
         * New timestamp of the frame, which will be used as video thumbnail.
         */
        protected float $coverFrameTimestamp,
        /**
         * Identifier of the story to edit.
         */
        protected int   $storyId,
        /**
         * Identifier of the chat that posted the story.
         */
        protected int   $storyPosterChatId,
    ) {}

    public static function fromArray(array $array): EditStoryCover
    {
        return new static(
            coverFrameTimestamp: $array['cover_frame_timestamp'],
            storyId            : $array['story_id'],
            storyPosterChatId  : $array['story_poster_chat_id'],
        );
    }

    public function getCoverFrameTimestamp(): float
    {
        return $this->coverFrameTimestamp;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    public function setCoverFrameTimestamp(float $value): static
    {
        $this->coverFrameTimestamp = $value;

        return $this;
    }

    public function setStoryId(int $value): static
    {
        $this->storyId = $value;

        return $this;
    }

    public function setStoryPosterChatId(int $value): static
    {
        $this->storyPosterChatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'cover_frame_timestamp' => $this->coverFrameTimestamp,
            'story_id'              => $this->storyId,
            'story_poster_chat_id'  => $this->storyPosterChatId,
        ];
    }
}
