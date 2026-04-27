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
    public const string TYPE_NAME = 'foundAffiliatePrograms';

    public function __construct(
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
        /**
         * The list of affiliate programs.
         *
         * @var FoundAffiliateProgram[]
         */
        protected array  $programs,
        /**
         * The total number of found affiliate programs.
         */
        protected int    $totalCount,
    ) {}

    public static function fromArray(array $array): FoundAffiliatePrograms
    {
        return new static(
            nextOffset: $array['next_offset'],
            programs  : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['programs']),
            totalCount: $array['total_count'],
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

    public function setNextOffset(string $value): static
    {
        $this->nextOffset = $value;

        return $this;
    }

    public function setPrograms(array $value): static
    {
        $this->programs = $value;

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
            'programs'    => array_map(static fn($x) => $x->jsonSerialize(), $this->programs),
            'total_count' => $this->totalCount,
        ];
    }
}
