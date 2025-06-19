<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

/**
 * The link is a link to a story. Link preview description is unavailable.
 */
class LinkPreviewTypeStory extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeStory';

    public function __construct(
        /**
         * The identifier of the chat that posted the story.
         */
        protected int $storyPosterChatId,
        /**
         * Story identifier.
         */
        protected int $storyId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeStory
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
