<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Represents a list of group call streams
 */
class GroupCallStreams extends TdObject
{
    public const TYPE_NAME = 'groupCallStreams';

    /**
     * A list of group call streams
     *
     * @var GroupCallStream[]
     */
    protected array $streams;

    public function __construct(array $streams)
    {
        $this->streams = $streams;
    }

    public static function fromArray(array $array): GroupCallStreams
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['streams']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->streams),
        ];
    }

    public function getStreams(): array
    {
        return $this->streams;
    }
}
