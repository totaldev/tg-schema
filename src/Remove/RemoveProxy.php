<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Removes a proxy server. Can be called before authorization
 */
class RemoveProxy extends TdFunction
{
    public const TYPE_NAME = 'removeProxy';

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

    public static function fromArray(array $array): RemoveProxy
    {
        return new static(
            $array['proxy_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'proxy_id' => $this->proxyId,
        ];
    }

    public function getProxyId(): int
    {
        return $this->proxyId;
    }
}
