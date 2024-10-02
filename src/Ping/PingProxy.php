<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ping;

use Totaldev\TgSchema\TdFunction;

/**
 * Computes time needed to receive a response from a Telegram server through a proxy. Can be called before authorization.
 */
class PingProxy extends TdFunction
{
    public const TYPE_NAME = 'pingProxy';

    public function __construct(
        /**
         * Proxy identifier. Use 0 to ping a Telegram server without a proxy.
         */
        protected int $proxyId
    ) {}

    public static function fromArray(array $array): PingProxy
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
