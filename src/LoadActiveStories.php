<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Loads more active stories from a story list. The loaded stories will be sent through updates. Active stories are sorted by the pair (active_stories.order, active_stories.story_sender_chat_id) in descending order. Returns a 404 error if all active stories have been loaded
 */
class LoadActiveStories extends TdFunction
{
    public const TYPE_NAME = 'loadActiveStories';

    /**
     * The story list in which to load active stories
     *
     * @var StoryList
     */
    protected StoryList $storyList;

    public function __construct(StoryList $storyList)
    {
        $this->storyList = $storyList;
    }

    public static function fromArray(array $array): LoadActiveStories
    {
        return new static(
            TdSchemaRegistry::fromArray($array['story_list']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_list' => $this->storyList->typeSerialize(),
        ];
    }

    public function getStoryList(): StoryList
    {
        return $this->storyList;
    }
}
