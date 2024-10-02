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
    public const TYPE_NAME = 'stories';

    public function __construct(
        /**
         * Approximate total number of stories found.
         */
        protected int   $totalCount,
        /**
         * The list of stories.
         *
         * @var Story[]
         */
        protected array $stories,
        /**
         * Identifiers of the pinned stories; returned only in getChatPostedToChatPageStories with from_story_id == 0.
         *
         * @var int[]
         */
        protected array $pinnedStoryIds,
    ) {}

    public static function fromArray(array $array): Stories
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['stories']),
            $array['pinned_story_ids'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'total_count'      => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->stories),
            'pinned_story_ids' => $this->pinnedStoryIds,
        ];
    }
}
