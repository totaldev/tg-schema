<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Paid;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * The media is a video.
 */
class PaidMediaVideo extends PaidMedia
{
    public const string TYPE_NAME = 'paidMediaVideo';

    public function __construct(
        /**
         * Cover of the video; may be null if none.
         */
        protected ?Photo $cover,
        /**
         * Timestamp from which the video playing must start, in seconds.
         */
        protected int    $startTimestamp,
        /**
         * The video.
         */
        protected Video  $video,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaidMediaVideo
    {
        return new static(
            cover         : (isset($array['cover']) ? TdSchemaRegistry::fromArray($array['cover']) : null),
            startTimestamp: $array['start_timestamp'],
            video         : TdSchemaRegistry::fromArray($array['video']),
        );
    }

    public function getCover(): ?Photo
    {
        return $this->cover;
    }

    public function getStartTimestamp(): int
    {
        return $this->startTimestamp;
    }

    public function getVideo(): Video
    {
        return $this->video;
    }

    public function setCover(?Photo $value): static
    {
        $this->cover = $value;

        return $this;
    }

    public function setStartTimestamp(int $value): static
    {
        $this->startTimestamp = $value;

        return $this;
    }

    public function setVideo(Video $value): static
    {
        $this->video = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'cover'           => (null !== $this->cover ? $this->cover->jsonSerialize() : null),
            'start_timestamp' => $this->startTimestamp,
            'video'           => $this->video->jsonSerialize(),
        ];
    }
}
