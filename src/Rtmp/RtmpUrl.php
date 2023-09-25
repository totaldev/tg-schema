<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rtmp;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents an RTMP URL
 */
class RtmpUrl extends TdObject
{
    public const TYPE_NAME = 'rtmpUrl';

    /**
     * Stream key
     *
     * @var string
     */
    protected string $streamKey;

    /**
     * The URL
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $url, string $streamKey)
    {
        $this->url = $url;
        $this->streamKey = $streamKey;
    }

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
            'stream_key' => $this->streamKey,
        ];
    }
}
