<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Added;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of reactions added to a message.
 */
class AddedReactions extends TdObject
{
    public const string TYPE_NAME = 'addedReactions';

    public function __construct(
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
        /**
         * The list of added reactions.
         *
         * @var AddedReaction[]
         */
        protected array  $reactions,
        /**
         * The total number of found reactions.
         */
        protected int    $totalCount,
    ) {}

    public static function fromArray(array $array): AddedReactions
    {
        return new static(
            nextOffset: $array['next_offset'],
            reactions : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['reactions']),
            totalCount: $array['total_count'],
        );
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getReactions(): array
    {
        return $this->reactions;
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

    public function setReactions(array $value): static
    {
        $this->reactions = $value;

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
            'reactions'   => array_map(static fn($x) => $x->jsonSerialize(), $this->reactions),
            'total_count' => $this->totalCount,
        ];
    }
}
