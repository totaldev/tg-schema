<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * The link is a link to a video player.
 */
class LinkPreviewTypeEmbeddedVideoPlayer extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeEmbeddedVideoPlayer';

    public function __construct(
        /**
         * Duration of the video, in seconds.
         */
        protected int    $duration,
        /**
         * Expected height of the embedded player.
         */
        protected int    $height,
        /**
         * Thumbnail of the video; may be null if unknown.
         */
        protected ?Photo $thumbnail,
        /**
         * URL of the external video player.
         */
        protected string $url,
        /**
         * The cached video; may be null if unknown.
         */
        protected ?Video $video,
        /**
         * Expected width of the embedded player.
         */
        protected int    $width,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeEmbeddedVideoPlayer
    {
        return new static(
            duration : $array['duration'],
            height   : $array['height'],
            thumbnail: (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            url      : $array['url'],
            video    : (isset($array['video']) ? TdSchemaRegistry::fromArray($array['video']) : null),
            width    : $array['width'],
        );
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getThumbnail(): ?Photo
    {
        return $this->thumbnail;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getVideo(): ?Video
    {
        return $this->video;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setHeight(int $value): static
    {
        $this->height = $value;

        return $this;
    }

    public function setThumbnail(?Photo $value): static
    {
        $this->thumbnail = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function setVideo(?Video $value): static
    {
        $this->video = $value;

        return $this;
    }

    public function setWidth(int $value): static
    {
        $this->width = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'duration'  => $this->duration,
            'height'    => $this->height,
            'thumbnail' => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'url'       => $this->url,
            'video'     => (null !== $this->video ? $this->video->jsonSerialize() : null),
            'width'     => $this->width,
        ];
    }
}
