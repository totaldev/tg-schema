<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * The link is a link to a video.
 */
class LinkPreviewTypeVideo extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeVideo';

    public function __construct(
        /**
         * The video description.
         */
        protected Video  $video,
        /**
         * Cover of the video; may be null if none.
         */
        protected ?Photo $cover,
        /**
         * Timestamp from which the video playing must start, in seconds.
         */
        protected int    $startTimestamp
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeVideo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video']),
            isset($array['cover']) ? TdSchemaRegistry::fromArray($array['cover']) : null,
            $array['start_timestamp'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'video'           => $this->video->typeSerialize(),
            'cover'           => (isset($this->cover) ? $this->cover : null),
            'start_timestamp' => $this->startTimestamp,
        ];
    }
}
