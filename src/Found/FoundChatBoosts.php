<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\Chat\ChatBoost;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of boosts applied to a chat.
 */
class FoundChatBoosts extends TdObject
{
    public const string TYPE_NAME = 'foundChatBoosts';

    public function __construct(
        /**
         * List of boosts.
         *
         * @var ChatBoost[]
         */
        protected array  $boosts,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
        /**
         * Total number of boosts applied to the chat.
         */
        protected int    $totalCount,
    ) {}

    public static function fromArray(array $array): FoundChatBoosts
    {
        return new static(
            boosts    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['boosts']),
            nextOffset: $array['next_offset'],
            totalCount: $array['total_count'],
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

    public function setBoosts(array $value): static
    {
        $this->boosts = $value;

        return $this;
    }

    public function setNextOffset(string $value): static
    {
        $this->nextOffset = $value;

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
            'boosts'      => array_map(static fn($x) => $x->jsonSerialize(), $this->boosts),
            'next_offset' => $this->nextOffset,
            'total_count' => $this->totalCount,
        ];
    }
}
