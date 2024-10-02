<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A story became inaccessible.
 */
class UpdateStoryDeleted extends Update
{
    public const TYPE_NAME = 'updateStoryDeleted';

    public function __construct(
        /**
         * Identifier of the chat that posted the story.
         */
        protected int $storySenderChatId,
        /**
         * Story identifier.
         */
        protected int $storyId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateStoryDeleted
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
