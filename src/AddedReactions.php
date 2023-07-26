<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Represents a list of reactions added to a message
 */
class AddedReactions extends TdObject
{
    public const TYPE_NAME = 'addedReactions';

    /**
     * The total number of found reactions
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * The list of added reactions
     *
     * @var AddedReaction[]
     */
    protected array $reactions;

    /**
     * The offset for the next request. If empty, there are no more results
     *
     * @var string
     */
    protected string $nextOffset;

    public function __construct(int $totalCount, array $reactions, string $nextOffset)
    {
        $this->totalCount = $totalCount;
        $this->reactions = $reactions;
        $this->nextOffset = $nextOffset;
    }

    public static function fromArray(array $array): AddedReactions
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['reactions']),
            $array['next_offset'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->reactions),
            'next_offset' => $this->nextOffset,
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getReactions(): array
    {
        return $this->reactions;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }
}
