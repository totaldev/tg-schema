<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes a proxy server. Can be called before authorization.
 */
class RemoveProxy extends TdFunction
{
    public const TYPE_NAME = 'removeProxy';

    public function __construct(
        /**
         * Proxy identifier.
         */
        protected int $proxyId
    ) {}

    public static function fromArray(array $array): RemoveProxy
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
