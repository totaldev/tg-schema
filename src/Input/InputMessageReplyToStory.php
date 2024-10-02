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
         * The identifier of the sender of the story. Currently, stories can be replied only in the sender's chat and channel stories can't be replied.
         */
        protected int $storySenderChatId,
        /**
         * The identifier of the story.
         */
        protected int $storyId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageReplyToStory
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
