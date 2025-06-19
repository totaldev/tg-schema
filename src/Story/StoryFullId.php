<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;

/**
 * Contains identifier of a story along with identifier of the chat that posted it.
 */
class StoryFullId extends TdObject
{
    public const TYPE_NAME = 'storyFullId';

    public function __construct(
        /**
         * Identifier of the chat that posted the story.
         */
        protected int $posterChatId,
        /**
         * Unique story identifier among stories of the chat.
         */
        protected int $storyId
    ) {}

    public static function fromArray(array $array): StoryFullId
    {
        return new static(
            $array['poster_chat_id'],
            $array['story_id'],
        );
    }

    public function getPosterChatId(): int
    {
        return $this->posterChatId;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'poster_chat_id' => $this->posterChatId,
            'story_id'       => $this->storyId,
        ];
    }
}
