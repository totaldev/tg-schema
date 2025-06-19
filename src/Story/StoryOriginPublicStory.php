<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

/**
 * The original story was a public story that was posted by a known chat.
 */
class StoryOriginPublicStory extends StoryOrigin
{
    public const TYPE_NAME = 'storyOriginPublicStory';

    public function __construct(
        /**
         * Identifier of the chat that posted original story.
         */
        protected int $chatId,
        /**
         * Story identifier of the original story.
         */
        protected int $storyId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryOriginPublicStory
    {
        return new static(
            $array['chat_id'],
            $array['story_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'story_id' => $this->storyId,
        ];
    }
}
