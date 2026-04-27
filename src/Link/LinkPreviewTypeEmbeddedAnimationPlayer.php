<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to an animation player.
 */
class LinkPreviewTypeEmbeddedAnimationPlayer extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeEmbeddedAnimationPlayer';

    public function __construct(
        /**
         * Duration of the animation, in seconds.
         */
        protected int    $duration,
        /**
         * Expected height of the embedded player.
         */
        protected int    $height,
        /**
         * Thumbnail of the animation; may be null if unknown.
         */
        protected ?Photo $thumbnail,
        /**
         * URL of the external animation player.
         */
        protected string $url,
        /**
         * Expected width of the embedded player.
         */
        protected int    $width,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeEmbeddedAnimationPlayer
    {
        return new static(
            duration : $array['duration'],
            height   : $array['height'],
            thumbnail: (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            url      : $array['url'],
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
            'width'     => $this->width,
        ];
    }
}
