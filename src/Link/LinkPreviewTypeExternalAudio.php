<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

/**
 * The link is a link to an audio file.
 */
class LinkPreviewTypeExternalAudio extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeExternalAudio';

    public function __construct(
        /**
         * URL of the audio file.
         */
        protected string $url,
        /**
         * MIME type of the audio file.
         */
        protected string $mimeType,
        /**
         * Duration of the audio, in seconds; 0 if unknown.
         */
        protected int    $duration
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeExternalAudio
    {
        return new static(
            $array['url'],
            $array['mime_type'],
            $array['duration'],
        );
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'url'       => $this->url,
            'mime_type' => $this->mimeType,
            'duration'  => $this->duration,
        ];
    }
}
