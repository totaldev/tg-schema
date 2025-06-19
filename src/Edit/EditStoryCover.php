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
    public const TYPE_NAME = 'editStoryCover';

    public function __construct(
        /**
         * Identifier of the chat that posted the story.
         */
        protected int   $storyPosterChatId,
        /**
         * Identifier of the story to edit.
         */
        protected int   $storyId,
        /**
         * New timestamp of the frame, which will be used as video thumbnail.
         */
        protected float $coverFrameTimestamp
    ) {}

    public static function fromArray(array $array): EditStoryCover
    {
        return new static(
            $array['story_poster_chat_id'],
            $array['story_id'],
            $array['cover_frame_timestamp'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'story_poster_chat_id'  => $this->storyPosterChatId,
            'story_id'              => $this->storyId,
            'cover_frame_timestamp' => $this->coverFrameTimestamp,
        ];
    }
}
