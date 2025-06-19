<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Load;

use Totaldev\TgSchema\Story\StoryList;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Loads more active stories from a story list. The loaded stories will be sent through updates. Active stories are sorted by the pair (active_stories.order,
 * active_stories.story_poster_chat_id) in descending order. Returns a 404 error if all active stories have been loaded.
 */
class LoadActiveStories extends TdFunction
{
    public const TYPE_NAME = 'loadActiveStories';

    public function __construct(
        /**
         * The story list in which to load active stories.
         */
        protected StoryList $storyList
    ) {}

    public static function fromArray(array $array): LoadActiveStories
    {
        return new static(
            TdSchemaRegistry::fromArray($array['story_list']),
        );
    }

    public function getStoryList(): StoryList
    {
        return $this->storyList;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'story_list' => $this->storyList->typeSerialize(),
        ];
    }
}
