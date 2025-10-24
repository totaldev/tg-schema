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
         * The URL.
         */
        protected string $url,
        /**
         * Stream key.
         */
        protected string $streamKey,
    ) {}

    public static function fromArray(array $array): RtmpUrl
    {
        return new static(
            $array['url'],
            $array['stream_key'],
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
            'url'        => $this->url,
            'stream_key' => $this->streamKey,
        ];
    }
}
