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
    public const TYPE_NAME = 'closeStory';

    public function __construct(
        /**
         * The identifier of the poster of the story to close.
         */
        protected int $storyPosterChatId,
        /**
         * The identifier of the story.
         */
        protected int $storyId
    ) {}

    public static function fromArray(array $array): CloseStory
    {
        return new static(
            $array['story_poster_chat_id'],
            $array['story_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_poster_chat_id' => $this->storyPosterChatId,
            'story_id'             => $this->storyId,
        ];
    }
}
