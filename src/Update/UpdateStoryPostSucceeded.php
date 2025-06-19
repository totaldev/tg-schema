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
    public const TYPE_NAME = 'updateStoryPostSucceeded';

    public function __construct(
        /**
         * The posted story.
         */
        protected Story $story,
        /**
         * The previous temporary story identifier.
         */
        protected int   $oldStoryId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateStoryPostSucceeded
    {
        return new static(
            TdSchemaRegistry::fromArray($array['story']),
            $array['old_story_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'story'        => $this->story->typeSerialize(),
            'old_story_id' => $this->oldStoryId,
        ];
    }
}
