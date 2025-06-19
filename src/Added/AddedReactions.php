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
    public const TYPE_NAME = 'addedReactions';

    public function __construct(
        /**
         * The total number of found reactions.
         */
        protected int    $totalCount,
        /**
         * The list of added reactions.
         *
         * @var AddedReaction[]
         */
        protected array  $reactions,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset
    ) {}

    public static function fromArray(array $array): AddedReactions
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['reactions']),
            $array['next_offset'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->reactions),
            'next_offset' => $this->nextOffset,
        ];
    }
}
