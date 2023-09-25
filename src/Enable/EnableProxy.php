<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Enable;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Enables a proxy. Only one proxy can be enabled at a time. Can be called before authorization
 */
class EnableProxy extends TdFunction
{
    public const TYPE_NAME = 'enableProxy';

    /**
     * Proxy identifier
     *
     * @var int
     */
    protected int $proxyId;

    public function __construct(int $proxyId)
    {
        $this->proxyId = $proxyId;
    }

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
            '@type' => static::TYPE_NAME,
            'proxy_id' => $this->proxyId,
        ];
    }
}
