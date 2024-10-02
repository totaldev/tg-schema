<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Story\Story;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A story has been successfully sent.
 */
class UpdateStorySendSucceeded extends Update
{
    public const TYPE_NAME = 'updateStorySendSucceeded';

    public function __construct(
        /**
         * The sent story.
         */
        protected Story $story,
        /**
         * The previous temporary story identifier.
         */
        protected int   $oldStoryId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateStorySendSucceeded
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
