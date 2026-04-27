<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Story\Story;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A story has been successfully posted.
 */
class UpdateStoryPostSucceeded extends Update
{
    public const string TYPE_NAME = 'updateStoryPostSucceeded';

    public function __construct(
        /**
         * The previous temporary story identifier.
         */
        protected int   $oldStoryId,
        /**
         * The posted story.
         */
        protected Story $story,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateStoryPostSucceeded
    {
        return new static(
            oldStoryId: $array['old_story_id'],
            story     : TdSchemaRegistry::fromArray($array['story']),
        );
    }

    public function getOldStoryId(): int
    {
        return $this->oldStoryId;
    }

    public function getStory(): Story
    {
        return $this->story;
    }

    public function setOldStoryId(int $value): static
    {
        $this->oldStoryId = $value;

        return $this;
    }

    public function setStory(Story $value): static
    {
        $this->story = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'old_story_id' => $this->oldStoryId,
            'story'        => $this->story->jsonSerialize(),
        ];
    }
}
