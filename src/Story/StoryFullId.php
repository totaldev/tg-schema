<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;

/**
 * Contains identifier of a story along with identifier of its sender.
 */
class StoryFullId extends TdObject
{
    public const TYPE_NAME = 'storyFullId';

    public function __construct(
        /**
         * Identifier of the chat that posted the story.
         */
        protected int $senderChatId,
        /**
         * Unique story identifier among stories of the given sender.
         */
        protected int $storyId,
    ) {}

    public static function fromArray(array $array): StoryFullId
    {
        return new static(
            $array['sender_chat_id'],
            $array['story_id'],
        );
    }

    public function getSenderChatId(): int
    {
        return $this->senderChatId;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'sender_chat_id' => $this->senderChatId,
            'story_id'       => $this->storyId,
        ];
    }
}
