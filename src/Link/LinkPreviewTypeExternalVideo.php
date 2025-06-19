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
    public const TYPE_NAME = 'linkPreviewTypeExternalVideo';

    public function __construct(
        /**
         * URL of the video file.
         */
        protected string $url,
        /**
         * MIME type of the video file.
         */
        protected string $mimeType,
        /**
         * Expected width of the video preview; 0 if unknown.
         */
        protected int    $width,
        /**
         * Expected height of the video preview; 0 if unknown.
         */
        protected int    $height,
        /**
         * Duration of the video, in seconds; 0 if unknown.
         */
        protected int    $duration
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeExternalVideo
    {
        return new static(
            $array['url'],
            $array['mime_type'],
            $array['width'],
            $array['height'],
            $array['duration'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'url'       => $this->url,
            'mime_type' => $this->mimeType,
            'width'     => $this->width,
            'height'    => $this->height,
            'duration'  => $this->duration,
        ];
    }
}
