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
    public const TYPE_NAME = 'messagePositions';

    public function __construct(
        /**
         * Total number of messages found.
         */
        protected int   $totalCount,
        /**
         * List of message positions.
         *
         * @var MessagePosition[]
         */
        protected array $positions
    ) {}

    public static function fromArray(array $array): MessagePositions
    {
        return new static(
            $array['total_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['positions']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(static fn($x) => $x->typeSerialize(), $this->positions),
        ];
    }
}
