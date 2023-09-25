<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a story. Call searchPublicChat with the given sender username, then call getStory with the received chat identifier and the given
 * story identifier
 */
class InternalLinkTypeStory extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeStory';

    /**
     * Story identifier
     *
     * @var int
     */
    protected int $storyId;

    /**
     * Username of the sender of the story
     *
     * @var string
     */
    protected string $storySenderUsername;

    public function __construct(string $storySenderUsername, int $storyId)
    {
        parent::__construct();

        $this->storySenderUsername = $storySenderUsername;
        $this->storyId = $storyId;
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
            '@type' => static::TYPE_NAME,
            'story_sender_username' => $this->storySenderUsername,
            'story_id' => $this->storyId,
        ];
    }
}
