<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Stories;

use Totaldev\TgSchema\Story\Story;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of stories.
 */
class Stories extends TdObject
{
    public const string TYPE_NAME = 'stories';

    public function __construct(
        /**
         * Identifiers of the pinned stories; returned only in getChatPostedToChatPageStories with from_story_id == 0.
         *
         * @var int[]
         */
        protected array $pinnedStoryIds,
        /**
         * The list of stories.
         *
         * @var Story[]
         */
        protected array $stories,
        /**
         * Approximate total number of stories found.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): Stories
    {
        return new static(
            pinnedStoryIds: $array['pinned_story_ids'],
            stories       : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['stories']),
            totalCount    : $array['total_count'],
        );
    }

    public function getPinnedStoryIds(): array
    {
        return $this->pinnedStoryIds;
    }

    public function getStories(): array
    {
        return $this->stories;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setPinnedStoryIds(array $value): static
    {
        $this->pinnedStoryIds = $value;

        return $this;
    }

    public function setStories(array $value): static
    {
        $this->stories = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'pinned_story_ids' => $this->pinnedStoryIds,
            'stories'          => array_map(static fn($x) => $x->jsonSerialize(), $this->stories),
            'total_count'      => $this->totalCount,
        ];
    }
}
