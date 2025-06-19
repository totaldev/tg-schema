<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The media is a video.
 */
class InputPaidMediaTypeVideo extends InputPaidMediaType
{
    public const TYPE_NAME = 'inputPaidMediaTypeVideo';

    public function __construct(
        /**
         * Cover of the video; pass null to skip cover uploading.
         */
        protected InputFile $cover,
        /**
         * Timestamp from which the video playing must start, in seconds.
         */
        protected int       $startTimestamp,
        /**
         * Duration of the video, in seconds.
         */
        protected int       $duration,
        /**
         * True, if the video is expected to be streamed.
         */
        protected bool      $supportsStreaming
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPaidMediaTypeVideo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['cover']),
            $array['start_timestamp'],
            $array['duration'],
            $array['supports_streaming'],
        );
    }

    public function getCover(): InputFile
    {
        return $this->cover;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getStartTimestamp(): int
    {
        return $this->startTimestamp;
    }

    public function getSupportsStreaming(): bool
    {
        return $this->supportsStreaming;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'cover'              => $this->cover->typeSerialize(),
            'start_timestamp'    => $this->startTimestamp,
            'duration'           => $this->duration,
            'supports_streaming' => $this->supportsStreaming,
        ];
    }
}
