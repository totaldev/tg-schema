<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Http;

use Totaldev\TgSchema\TdObject;

/**
 * Contains an HTTP URL.
 */
class HttpUrl extends TdObject
{
    public const TYPE_NAME = 'httpUrl';

    public function __construct(
        /**
         * The URL.
         */
        protected string $url
    ) {}

    public static function fromArray(array $array): HttpUrl
    {
        return new static(
            $array['url'],
        );
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url'   => $this->url,
        ];
    }
}
