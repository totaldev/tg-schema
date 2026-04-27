<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Connected;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of affiliate programs that were connected to an affiliate.
 */
class ConnectedAffiliatePrograms extends TdObject
{
    public const string TYPE_NAME = 'connectedAffiliatePrograms';

    public function __construct(
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
        /**
         * The list of connected affiliate programs.
         *
         * @var ConnectedAffiliateProgram[]
         */
        protected array  $programs,
        /**
         * The total number of affiliate programs that were connected to the affiliate.
         */
        protected int    $totalCount,
    ) {}

    public static function fromArray(array $array): ConnectedAffiliatePrograms
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
