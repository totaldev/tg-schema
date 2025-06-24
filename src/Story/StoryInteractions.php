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
    public const TYPE_NAME = 'storyInteractions';

    public function __construct(
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
    ) {}

    public static function fromArray(array $array): StoryInteractions
    {
        return new static(
            $array['total_count'],
            $array['total_forward_count'],
            $array['total_reaction_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['interactions']),
            $array['next_offset'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'total_count'          => $this->totalCount,
            'total_forward_count'  => $this->totalForwardCount,
            'total_reaction_count' => $this->totalReactionCount,
            array_map(static fn($x) => $x->typeSerialize(), $this->interactions),
            'next_offset'          => $this->nextOffset,
        ];
    }
}
