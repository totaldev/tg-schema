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
    public const string TYPE_NAME = 'linkPreviewTypeExternalAudio';

    public function __construct(
        /**
         * Duration of the audio, in seconds; 0 if unknown.
         */
        protected int    $duration,
        /**
         * MIME type of the audio file.
         */
        protected string $mimeType,
        /**
         * URL of the audio file.
         */
        protected string $url,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeExternalAudio
    {
        return new static(
            duration: $array['duration'],
            mimeType: $array['mime_type'],
            url     : $array['url'],
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

    public function setDuration(int $value): static
    {
        $this->duration = $value;

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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'duration'  => $this->duration,
            'mime_type' => $this->mimeType,
            'url'       => $this->url,
        ];
    }
}
