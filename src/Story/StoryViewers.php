<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

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
     * Approximate total number of story viewers found
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * List of story viewers
     *
     * @var StoryViewer[]
     */
    protected array $viewers;

    /**
     * The offset for the next request. If empty, there are no more results
     *
     * @var string
     */
    protected string $nextOffset;

    public function __construct(int $totalCount, array $viewers, string $nextOffset)
    {
        $this->totalCount = $totalCount;
        $this->viewers = $viewers;
        $this->nextOffset = $nextOffset;
    }

    public static function fromArray(array $array): StoryViewers
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['viewers']),
            $array['next_offset'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->viewers),
            'next_offset' => $this->nextOffset,
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getViewers(): array
    {
        return $this->viewers;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }
}
