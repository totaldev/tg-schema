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
    public const string TYPE_NAME = 'linkPreviewTypeStory';

    public function __construct(
        /**
         * Story identifier.
         */
        protected int $storyId,
        /**
         * The identifier of the chat that posted the story.
         */
        protected int $storyPosterChatId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeStory
    {
        return new static(
            storyId          : $array['story_id'],
            storyPosterChatId: $array['story_poster_chat_id'],
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

    public function setStoryId(int $value): static
    {
        $this->storyId = $value;

        return $this;
    }

    public function setStoryPosterChatId(int $value): static
    {
        $this->storyPosterChatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_id'             => $this->storyId,
            'story_poster_chat_id' => $this->storyPosterChatId,
        ];
    }
}
