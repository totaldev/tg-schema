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
         * The identifier of the sender of the opened story.
         */
        protected int $storySenderChatId,
        /**
         * The identifier of the story.
         */
        protected int $storyId,
    ) {}

    public static function fromArray(array $array): OpenStory
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
