<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes a previously sent story. Can be called only if story.can_be_deleted == true.
 */
class DeleteStory extends TdFunction
{
    public const TYPE_NAME = 'deleteStory';

    public function __construct(
        /**
         * Identifier of the chat that posted the story.
         */
        protected int $storySenderChatId,
        /**
         * Identifier of the story to delete.
         */
        protected int $storyId,
    ) {}

    public static function fromArray(array $array): DeleteStory
    {
        return new static(
            $array['story_sender_chat_id'],
            $array['story_id'],
        );
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStorySenderChatId(): int
    {
        return $this->storySenderChatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_sender_chat_id' => $this->storySenderChatId,
            'story_id'             => $this->storyId,
        ];
    }
}
