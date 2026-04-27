<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of interactions with a story.
 */
class StoryInteractions extends TdObject
{
    public const string TYPE_NAME = 'storyInteractions';

    public function __construct(
        /**
         * List of story interactions.
         *
         * @var StoryInteraction[]
         */
        protected array  $interactions,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
        /**
         * Approximate total number of interactions found.
         */
        protected int    $totalCount,
        /**
         * Approximate total number of found forwards and reposts; always 0 for chat stories.
         */
        protected int    $totalForwardCount,
        /**
         * Approximate total number of found reactions; always 0 for chat stories.
         */
        protected int    $totalReactionCount,
    ) {}

    public static function fromArray(array $array): StoryInteractions
    {
        return new static(
            interactions      : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['interactions']),
            nextOffset        : $array['next_offset'],
            totalCount        : $array['total_count'],
            totalForwardCount : $array['total_forward_count'],
            totalReactionCount: $array['total_reaction_count'],
        );
    }

    public function getInteractions(): array
    {
        return $this->interactions;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getTotalForwardCount(): int
    {
        return $this->totalForwardCount;
    }

    public function getTotalReactionCount(): int
    {
        return $this->totalReactionCount;
    }

    public function setInteractions(array $value): static
    {
        $this->interactions = $value;

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

    public function setTotalForwardCount(int $value): static
    {
        $this->totalForwardCount = $value;

        return $this;
    }

    public function setTotalReactionCount(int $value): static
    {
        $this->totalReactionCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'interactions'         => array_map(static fn($x) => $x->jsonSerialize(), $this->interactions),
            'next_offset'          => $this->nextOffset,
            'total_count'          => $this->totalCount,
            'total_forward_count'  => $this->totalForwardCount,
            'total_reaction_count' => $this->totalReactionCount,
        ];
    }
}
