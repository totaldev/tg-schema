<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A message with a forwarded story. Stories can't be forwarded to secret chats. A story can be forwarded only if story.can_be_forwarded.
 */
class InputMessageStory extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageStory';

    public function __construct(
        /**
         * Identifier of the chat that posted the story.
         */
        protected int $storyPosterChatId,
        /**
         * Story identifier.
         */
        protected int $storyId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageStory
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
