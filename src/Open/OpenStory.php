<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Open;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that a story is opened and is being viewed by the user.
 */
class OpenStory extends TdFunction
{
    public const TYPE_NAME = 'openStory';

    public function __construct(
        /**
         * The identifier of the chat that posted the opened story.
         */
        protected int $storyPosterChatId,
        /**
         * The identifier of the story.
         */
        protected int $storyId
    ) {}

    public static function fromArray(array $array): OpenStory
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
