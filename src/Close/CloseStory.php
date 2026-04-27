<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Close;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that a story is closed by the user.
 */
class CloseStory extends TdFunction
{
    public const string TYPE_NAME = 'closeStory';

    public function __construct(
        /**
         * The identifier of the story.
         */
        protected int $storyId,
        /**
         * The identifier of the poster of the story to close.
         */
        protected int $storyPosterChatId,
    ) {}

    public static function fromArray(array $array): CloseStory
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
