<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\TdObject;

/**
 * Describes an available stream in a group call.
 */
class GroupCallStream extends TdObject
{
    public const TYPE_NAME = 'groupCallStream';

    public function __construct(
        /**
         * Identifier of an audio/video channel.
         */
        protected int $channelId,
        /**
         * Scale of segment durations in the stream. The duration is 1000/(2**scale) milliseconds.
         */
        protected int $scale,
        /**
         * Point in time when the stream currently ends; Unix timestamp in milliseconds.
         */
        protected int $timeOffset,
    ) {}

    public static function fromArray(array $array): GroupCallStream
    {
        return new static(
            $array['channel_id'],
            $array['scale'],
            $array['time_offset'],
        );
    }

    public function getChannelId(): int
    {
        return $this->channelId;
    }

    public function getScale(): int
    {
        return $this->scale;
    }

    public function getTimeOffset(): int
    {
        return $this->timeOffset;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'channel_id'  => $this->channelId,
            'scale'       => $this->scale,
            'time_offset' => $this->timeOffset,
        ];
    }
}
