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
         * Total number of boosts applied to the chat.
         */
        protected int    $totalCount,
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
    ) {}

    public static function fromArray(array $array): FoundChatBoosts
    {
        return new static(
            $array['total_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['boosts']),
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
            'total_count' => $this->totalCount,
            'boosts'      => array_map(static fn($x) => $x->typeSerialize(), $this->boosts),
            'next_offset' => $this->nextOffset,
        ];
    }
}
