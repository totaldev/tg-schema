<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an HTTPS link, which can be used to add a proxy. Available only for SOCKS5 and MTProto proxies. Can be called before authorization.
 */
class GetProxyLink extends TdFunction
{
    public const TYPE_NAME = 'getProxyLink';

    public function __construct(
        /**
         * Proxy identifier.
         */
        protected int $proxyId
    ) {}

    public static function fromArray(array $array): GetProxyLink
    {
        return new static(
            $array['proxy_id'],
        );
    }

    public function getProxyId(): int
    {
        return $this->proxyId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'proxy_id' => $this->proxyId,
        ];
    }
}
