<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A repost of the story as a story.
 */
class StoryInteractionTypeRepost extends StoryInteractionType
{
    public const string TYPE_NAME = 'storyInteractionTypeRepost';

    public function __construct(
        /**
         * The reposted story.
         */
        protected Story $story
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryInteractionTypeRepost
    {
        return new static(
            story: TdSchemaRegistry::fromArray($array['story']),
        );
    }

    public function getStory(): Story
    {
        return $this->story;
    }

    public function setStory(Story $value): static
    {
        $this->story = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story' => $this->story->jsonSerialize(),
        ];
    }
}
