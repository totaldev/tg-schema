<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of group call streams.
 */
class GroupCallStreams extends TdObject
{
    public const string TYPE_NAME = 'groupCallStreams';

    public function __construct(
        /**
         * A list of group call streams.
         *
         * @var GroupCallStream[]
         */
        protected array $streams
    ) {}

    public static function fromArray(array $array): GroupCallStreams
    {
        return new static(
            streams: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['streams']),
        );
    }

    public function getStreams(): array
    {
        return $this->streams;
    }

    public function setStreams(array $value): static
    {
        $this->streams = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'streams' => array_map(static fn($x) => $x->jsonSerialize(), $this->streams),
        ];
    }
}
