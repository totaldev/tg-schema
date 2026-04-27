<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes a previously posted story. Can be called only if story.can_be_deleted == true.
 */
class DeleteStory extends TdFunction
{
    public const string TYPE_NAME = 'deleteStory';

    public function __construct(
        /**
         * Identifier of the story to delete.
         */
        protected int $storyId,
        /**
         * Identifier of the chat that posted the story.
         */
        protected int $storyPosterChatId,
    ) {}

    public static function fromArray(array $array): DeleteStory
    {
        return new static(
            storyId          : $array['story_id'],
            storyPosterChatId: $array['story_poster_chat_id'],
        );
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
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
            '@type'                => static::TYPE_NAME,
            'story_id'             => $this->storyId,
            'story_poster_chat_id' => $this->storyPosterChatId,
        ];
    }
}
