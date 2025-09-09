<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Enable;

use Totaldev\TgSchema\TdFunction;

/**
 * Enables a proxy. Only one proxy can be enabled at a time. Can be called before authorization.
 */
class EnableProxy extends TdFunction
{
    public const TYPE_NAME = 'enableProxy';

    public function __construct(
        /**
         * Proxy identifier.
         */
        protected int $proxyId
    ) {}

    public static function fromArray(array $array): EnableProxy
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
