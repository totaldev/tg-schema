<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Group\GroupCallVideoQuality;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns a file with a segment of a video chat or live story in a modified OGG format for audio or MPEG-4 format for video.
 */
class GetGroupCallStreamSegment extends TdFunction
{
    public const string TYPE_NAME = 'getGroupCallStreamSegment';

    public function __construct(
        /**
         * Identifier of an audio/video channel to get as received from tgcalls.
         */
        protected int                    $channelId,
        /**
         * Group call identifier.
         */
        protected int                    $groupCallId,
        /**
         * Segment duration scale; 0-1. Segment's duration is 1000/(2**scale) milliseconds.
         */
        protected int                    $scale,
        /**
         * Point in time when the stream segment begins; Unix timestamp in milliseconds.
         */
        protected int                    $timeOffset,
        /**
         * Video quality as received from tgcalls; pass null to get the worst available quality.
         */
        protected ?GroupCallVideoQuality $videoQuality = null,
    ) {}

    public static function fromArray(array $array): GetGroupCallStreamSegment
    {
        return new static(
            channelId   : $array['channel_id'],
            groupCallId : $array['group_call_id'],
            scale       : $array['scale'],
            timeOffset  : $array['time_offset'],
            videoQuality: (isset($array['video_quality']) ? TdSchemaRegistry::fromArray($array['video_quality']) : null),
        );
    }

    public function getChannelId(): int
    {
        return $this->channelId;
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getScale(): int
    {
        return $this->scale;
    }

    public function getTimeOffset(): int
    {
        return $this->timeOffset;
    }

    public function getVideoQuality(): ?GroupCallVideoQuality
    {
        return $this->videoQuality;
    }

    public function setChannelId(int $value): static
    {
        $this->channelId = $value;

        return $this;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setScale(int $value): static
    {
        $this->scale = $value;

        return $this;
    }

    public function setTimeOffset(int $value): static
    {
        $this->timeOffset = $value;

        return $this;
    }

    public function setVideoQuality(?GroupCallVideoQuality $value): static
    {
        $this->videoQuality = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'channel_id'    => $this->channelId,
            'group_call_id' => $this->groupCallId,
            'scale'         => $this->scale,
            'time_offset'   => $this->timeOffset,
            'video_quality' => (null !== $this->videoQuality ? $this->videoQuality->jsonSerialize() : null),
        ];
    }
}
