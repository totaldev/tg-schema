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
    public const string TYPE_NAME = 'foundStories';

    public function __construct(
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
        /**
         * List of stories.
         *
         * @var Story[]
         */
        protected array  $stories,
        /**
         * Approximate total number of stories found.
         */
        protected int    $totalCount,
    ) {}

    public static function fromArray(array $array): FoundStories
    {
        return new static(
            nextOffset: $array['next_offset'],
            stories   : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['stories']),
            totalCount: $array['total_count'],
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

    public function setNextOffset(string $value): static
    {
        $this->nextOffset = $value;

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
            '@type'       => static::TYPE_NAME,
            'next_offset' => $this->nextOffset,
            'stories'     => array_map(static fn($x) => $x->jsonSerialize(), $this->stories),
            'total_count' => $this->totalCount,
        ];
    }
}
