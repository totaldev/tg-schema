<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of message positions.
 */
class MessagePositions extends TdObject
{
    public const string TYPE_NAME = 'messagePositions';

    public function __construct(
        /**
         * List of message positions.
         *
         * @var MessagePosition[]
         */
        protected array $positions,
        /**
         * Total number of messages found.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): MessagePositions
    {
        return new static(
            positions : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['positions']),
            totalCount: $array['total_count'],
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
            'positions'   => array_map(static fn($x) => $x->jsonSerialize(), $this->positions),
            'total_count' => $this->totalCount,
        ];
    }
}
