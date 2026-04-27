<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rtmp;

use Totaldev\TgSchema\TdObject;

/**
 * Represents an RTMP URL.
 */
class RtmpUrl extends TdObject
{
    public const string TYPE_NAME = 'rtmpUrl';

    public function __construct(
        /**
         * Stream key.
         */
        protected string $streamKey,
        /**
         * The URL.
         */
        protected string $url,
    ) {}

    public static function fromArray(array $array): RtmpUrl
    {
        return new static(
            streamKey: $array['stream_key'],
            url      : $array['url'],
        );
    }

    public function getStreamKey(): string
    {
        return $this->streamKey;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setStreamKey(string $value): static
    {
        $this->streamKey = $value;

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
            '@type'      => static::TYPE_NAME,
            'stream_key' => $this->streamKey,
            'url'        => $this->url,
        ];
    }
}
