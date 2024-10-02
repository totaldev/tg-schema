<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * The media is a video.
 */
class InputPaidMediaTypeVideo extends InputPaidMediaType
{
    public const TYPE_NAME = 'inputPaidMediaTypeVideo';

    public function __construct(
        /**
         * Duration of the video, in seconds.
         */
        protected int  $duration,
        /**
         * True, if the video is supposed to be streamed.
         */
        protected bool $supportsStreaming,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPaidMediaTypeVideo
    {
        return new static(
            $array['duration'],
            $array['supports_streaming'],
        );
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getSupportsStreaming(): bool
    {
        return $this->supportsStreaming;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'duration'           => $this->duration,
            'supports_streaming' => $this->supportsStreaming,
        ];
    }
}
