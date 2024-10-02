<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A message with a forwarded story. Stories can't be sent to secret chats. A story can be forwarded only if story.can_be_forwarded.
 */
class InputMessageStory extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageStory';

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

    public static function fromArray(array $array): InputMessageStory
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
