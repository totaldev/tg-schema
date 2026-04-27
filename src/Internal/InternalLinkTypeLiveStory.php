<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a live story. Call searchPublicChat with the given chat username, then getChatActiveStories to get active stories in the chat, then
 * find a live story among active stories of the chat, and then joinLiveStory to join the live story.
 */
class InternalLinkTypeLiveStory extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeLiveStory';

    public function __construct(
        /**
         * Username of the poster of the story.
         */
        protected string $storyPosterUsername
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeLiveStory
    {
        return new static(
            storyPosterUsername: $array['story_poster_username'],
        );
    }

    public function getStoryPosterUsername(): string
    {
        return $this->storyPosterUsername;
    }

    public function setStoryPosterUsername(string $value): static
    {
        $this->storyPosterUsername = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'story_poster_username' => $this->storyPosterUsername,
        ];
    }
}
