<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\TdObject;

/**
 * Contains 0-based positions of matched objects.
 */
class FoundPositions extends TdObject
{
    public const string TYPE_NAME = 'foundPositions';

    public function __construct(
        /**
         * Total number of matched objects.
         */
        protected int   $totalCount,
        /**
         * The positions of the matched objects.
         *
         * @var int[]
         */
        protected array $positions,
    ) {}

    public static function fromArray(array $array): FoundPositions
    {
        return new static(
            $array['total_count'],
            $array['positions'],
        );
    }

    public function getPositions(): array
    {
        return $this->positions;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setPositions(array $value): static
    {
        $this->positions = $value;

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
            'positions'   => $this->positions,
        ];
    }
}
