<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Proxy;

/**
 * An MTProto proxy server.
 */
class ProxyTypeMtproto extends ProxyType
{
    public const TYPE_NAME = 'proxyTypeMtproto';

    public function __construct(
        /**
         * The proxy's secret in hexadecimal encoding.
         */
        protected string $secret
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ProxyTypeMtproto
    {
        return new static(
            $array['secret'],
        );
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'secret' => $this->secret,
        ];
    }
}
