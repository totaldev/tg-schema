<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of found affiliate programs.
 */
class FoundAffiliatePrograms extends TdObject
{
    public const TYPE_NAME = 'foundAffiliatePrograms';

    public function __construct(
        /**
         * The total number of found affiliate programs.
         */
        protected int    $totalCount,
        /**
         * The list of affiliate programs.
         *
         * @var FoundAffiliateProgram[]
         */
        protected array  $programs,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset
    ) {}

    public static function fromArray(array $array): FoundAffiliatePrograms
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['programs']),
            $array['next_offset'],
        );
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getPrograms(): array
    {
        return $this->programs;
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
            array_map(fn($x) => $x->typeSerialize(), $this->programs),
            'next_offset' => $this->nextOffset,
        ];
    }
}
