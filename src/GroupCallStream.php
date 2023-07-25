<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Describes an available stream in a group call
 */
class GroupCallStream extends TdObject
{
    public const TYPE_NAME = 'groupCallStream';

    /**
     * Identifier of an audio/video channel
     *
     * @var int
     */
    protected int $channelId;

    /**
     * Scale of segment durations in the stream. The duration is 1000/(2**scale) milliseconds
     *
     * @var int
     */
    protected int $scale;

    /**
     * Point in time when the stream currently ends; Unix timestamp in milliseconds
     *
     * @var int
     */
    protected int $timeOffset;

    public function __construct(int $channelId, int $scale, int $timeOffset)
    {
        $this->channelId = $channelId;
        $this->scale = $scale;
        $this->timeOffset = $timeOffset;
    }

    public static function fromArray(array $array): GroupCallStream
    {
        return new static(
            $array['channel_id'],
            $array['scale'],
            $array['time_offset'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'channel_id' => $this->channelId,
            'scale' => $this->scale,
            'time_offset' => $this->timeOffset,
        ];
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
}
