<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Audio\Audio;
use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to an audio player.
 */
class LinkPreviewTypeEmbeddedAudioPlayer extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeEmbeddedAudioPlayer';

    public function __construct(
        /**
         * The cached audio; may be null if unknown.
         */
        protected ?Audio $audio,
        /**
         * Duration of the audio, in seconds.
         */
        protected int    $duration,
        /**
         * Expected height of the embedded player.
         */
        protected int    $height,
        /**
         * Thumbnail of the audio; may be null if unknown.
         */
        protected ?Photo $thumbnail,
        /**
         * URL of the external audio player.
         */
        protected string $url,
        /**
         * Expected width of the embedded player.
         */
        protected int    $width,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeEmbeddedAudioPlayer
    {
        return new static(
            audio    : (isset($array['audio']) ? TdSchemaRegistry::fromArray($array['audio']) : null),
            duration : $array['duration'],
            height   : $array['height'],
            thumbnail: (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            url      : $array['url'],
            width    : $array['width'],
        );
    }

    public function getAudio(): ?Audio
    {
        return $this->audio;
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

    public function setAudio(?Audio $value): static
    {
        $this->audio = $value;

        return $this;
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
            'audio'     => (null !== $this->audio ? $this->audio->jsonSerialize() : null),
            'duration'  => $this->duration,
            'height'    => $this->height,
            'thumbnail' => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'url'       => $this->url,
            'width'     => $this->width,
        ];
    }
}
