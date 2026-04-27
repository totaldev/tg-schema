<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

/**
 * The link is a link to a video file.
 */
class LinkPreviewTypeExternalVideo extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeExternalVideo';

    public function __construct(
        /**
         * Duration of the video, in seconds; 0 if unknown.
         */
        protected int    $duration,
        /**
         * Expected height of the video preview; 0 if unknown.
         */
        protected int    $height,
        /**
         * MIME type of the video file.
         */
        protected string $mimeType,
        /**
         * URL of the video file.
         */
        protected string $url,
        /**
         * Expected width of the video preview; 0 if unknown.
         */
        protected int    $width,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeExternalVideo
    {
        return new static(
            duration: $array['duration'],
            height  : $array['height'],
            mimeType: $array['mime_type'],
            url     : $array['url'],
            width   : $array['width'],
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

    public function getMimeType(): string
    {
        return $this->mimeType;
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

    public function setMimeType(string $value): static
    {
        $this->mimeType = $value;

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
            'mime_type' => $this->mimeType,
            'url'       => $this->url,
            'width'     => $this->width,
        ];
    }
}
