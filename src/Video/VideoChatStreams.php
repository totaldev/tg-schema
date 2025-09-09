<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Video;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of video chat streams.
 */
class VideoChatStreams extends TdObject
{
    public const TYPE_NAME = 'videoChatStreams';

    public function __construct(
        /**
         * A list of video chat streams.
         *
         * @var VideoChatStream[]
         */
        protected array $streams
    ) {}

    public static function fromArray(array $array): VideoChatStreams
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['streams']),
        );
    }

    public function getStreams(): array
    {
        return $this->streams;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'streams' => array_map(static fn($x) => $x->typeSerialize(), $this->streams),
        ];
    }
}
