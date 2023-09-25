<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\Chat\ChatBoost;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of boosts applied to a chat
 */
class FoundChatBoosts extends TdObject
{
    public const TYPE_NAME = 'foundChatBoosts';

    /**
     * List of boosts
     *
     * @var ChatBoost[]
     */
    protected array $boosts;

    /**
     * The offset for the next request. If empty, there are no more results
     *
     * @var string
     */
    protected string $nextOffset;

    /**
     * Total number of boosts applied to the chat
     *
     * @var int
     */
    protected int $totalCount;

    public function __construct(int $totalCount, array $boosts, string $nextOffset)
    {
        $this->totalCount = $totalCount;
        $this->boosts = $boosts;
        $this->nextOffset = $nextOffset;
    }

    public static function fromArray(array $array): FoundChatBoosts
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['boosts']),
            $array['next_offset'],
        );
    }

    public function getBoosts(): array
    {
        return $this->boosts;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->boosts),
            'next_offset' => $this->nextOffset,
        ];
    }
}
