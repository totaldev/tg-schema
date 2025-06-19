<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * Describes a story to be replied.
 */
class InputMessageReplyToStory extends InputMessageReplyTo
{
    public const TYPE_NAME = 'inputMessageReplyToStory';

    public function __construct(
        /**
         * The identifier of the poster of the story. Currently, stories can be replied only in the chat that posted the story; channel stories can't be replied.
         */
        protected int $storyPosterChatId,
        /**
         * The identifier of the story.
         */
        protected int $storyId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageReplyToStory
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
