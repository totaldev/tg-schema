<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of story viewers
 */
class StoryViewers extends TdObject
{
    public const TYPE_NAME = 'storyViewers';

    /**
     * The offset for the next request. If empty, there are no more results
     *
     * @var string
     */
    protected string $nextOffset;

    /**
     * Approximate total number of story viewers found
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * Approximate total number of reactions set by found story viewers
     *
     * @var int
     */
    protected int $totalReactionCount;

    /**
     * List of story viewers
     *
     * @var StoryViewer[]
     */
    protected array $viewers;

    public function __construct(int $totalCount, int $totalReactionCount, array $viewers, string $nextOffset)
    {
        $this->totalCount = $totalCount;
        $this->totalReactionCount = $totalReactionCount;
        $this->viewers = $viewers;
        $this->nextOffset = $nextOffset;
    }

    public static function fromArray(array $array): StoryViewers
    {
        return new static(
            $array['total_count'],
            $array['total_reaction_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['viewers']),
            $array['next_offset'],
        );
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getTotalReactionCount(): int
    {
        return $this->totalReactionCount;
    }

    public function getViewers(): array
    {
        return $this->viewers;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'total_reaction_count' => $this->totalReactionCount,
            array_map(fn($x) => $x->typeSerialize(), $this->viewers),
            'next_offset' => $this->nextOffset,
        ];
    }
}
