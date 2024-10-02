<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a story. Call searchPublicChat with the given sender username, then call getStory with the received chat identifier and the given
 * story identifier, then show the story if received.
 */
class InternalLinkTypeStory extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeStory';

    public function __construct(
        /**
         * Username of the sender of the story.
         */
        protected string $storySenderUsername,
        /**
         * Story identifier.
         */
        protected int    $storyId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeStory
    {
        return new static(
            $array['story_sender_username'],
            $array['story_id'],
        );
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStorySenderUsername(): string
    {
        return $this->storySenderUsername;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'story_sender_username' => $this->storySenderUsername,
            'story_id'              => $this->storyId,
        ];
    }
}
