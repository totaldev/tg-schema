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
         * The identifier of the poster of the story.
         */
        protected int $storyPosterChatId,
        /**
         * The identifier of the story.
         */
        protected int $storyId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageReplyToStory
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
