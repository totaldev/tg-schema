<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Represents a list of stories
 */
class Stories extends TdObject
{
    public const TYPE_NAME = 'stories';

    /**
     * Approximate total number of stories found
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * The list of stories
     *
     * @var Story[]
     */
    protected array $stories;

    public function __construct(int $totalCount, array $stories)
    {
        $this->totalCount = $totalCount;
        $this->stories = $stories;
    }

    public static function fromArray(array $array): Stories
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['stories']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->stories),
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getStories(): array
    {
        return $this->stories;
    }
}
