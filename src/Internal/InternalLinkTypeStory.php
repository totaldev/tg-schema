<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a story. Call searchPublicChat with the given poster username, then call getStory with the received chat identifier and the given
 * story identifier, then show the story if received.
 */
class InternalLinkTypeStory extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeStory';

    public function __construct(
        /**
         * Story identifier.
         */
        protected int    $storyId,
        /**
         * Username of the poster of the story.
         */
        protected string $storyPosterUsername,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeStory
    {
        return new static(
            storyId            : $array['story_id'],
            storyPosterUsername: $array['story_poster_username'],
        );
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStoryPosterUsername(): string
    {
        return $this->storyPosterUsername;
    }

    public function setStoryId(int $value): static
    {
        $this->storyId = $value;

        return $this;
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
            'story_id'              => $this->storyId,
            'story_poster_username' => $this->storyPosterUsername,
        ];
    }
}
