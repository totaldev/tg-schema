<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\Story\Story;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of stories found by a search.
 */
class FoundStories extends TdObject
{
    public const TYPE_NAME = 'foundStories';

    public function __construct(
        /**
         * Approximate total number of stories found.
         */
        protected int    $totalCount,
        /**
         * List of stories.
         *
         * @var Story[]
         */
        protected array  $stories,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
    ) {}

    public static function fromArray(array $array): FoundStories
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['stories']),
            $array['next_offset'],
        );
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
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
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->stories),
            'next_offset' => $this->nextOffset,
        ];
    }
}
