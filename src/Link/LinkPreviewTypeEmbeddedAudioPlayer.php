<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to an audio player.
 */
class LinkPreviewTypeEmbeddedAudioPlayer extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeEmbeddedAudioPlayer';

    public function __construct(
        /**
         * URL of the external audio player.
         */
        protected string $url,
        /**
         * Thumbnail of the audio; may be null if unknown.
         */
        protected ?Photo $thumbnail,
        /**
         * Duration of the audio, in seconds.
         */
        protected int    $duration,
        /**
         * Expected width of the embedded player.
         */
        protected int    $width,
        /**
         * Expected height of the embedded player.
         */
        protected int    $height,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeEmbeddedAudioPlayer
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
            'thumbnail' => (isset($this->thumbnail) ? $this->thumbnail : null),
            'duration'  => $this->duration,
            'width'     => $this->width,
            'height'    => $this->height,
        ];
    }
}
