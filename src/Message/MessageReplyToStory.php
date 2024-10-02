<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * Describes a story replied by a given message.
 */
class MessageReplyToStory extends MessageReplyTo
{
    public const TYPE_NAME = 'messageReplyToStory';

    public function __construct(
        /**
         * The identifier of the sender of the story.
         */
        protected int $storySenderChatId,
        /**
         * The identifier of the story.
         */
        protected int $storyId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageReplyToStory
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
