<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a video player.
 */
class LinkPreviewTypeEmbeddedVideoPlayer extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeEmbeddedVideoPlayer';

    public function __construct(
        /**
         * URL of the external video player.
         */
        protected string $url,
        /**
         * Thumbnail of the video; may be null if unknown.
         */
        protected ?Photo $thumbnail,
        /**
         * Duration of the video, in seconds.
         */
        protected int    $duration,
        /**
         * Expected width of the embedded player.
         */
        protected int    $width,
        /**
         * Expected height of the embedded player.
         */
        protected int    $height
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeEmbeddedVideoPlayer
    {
        return new static(
            $array['url'],
            isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null,
            $array['duration'],
            $array['width'],
            $array['height'],
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

    public function getWidth(): int
    {
        return $this->width;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'url'       => $this->url,
            'thumbnail' => $this->thumbnail ?? null,
            'duration'  => $this->duration,
            'width'     => $this->width,
            'height'    => $this->height,
        ];
    }
}
