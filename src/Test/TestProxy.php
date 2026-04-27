<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\Proxy\Proxy;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a simple network request to the Telegram servers via proxy; for testing only. Can be called before authorization.
 */
class TestProxy extends TdFunction
{
    public const string TYPE_NAME = 'testProxy';

    public function __construct(
        /**
         * Identifier of a datacenter with which to test connection.
         */
        protected int   $dcId,
        /**
         * The proxy to test.
         */
        protected Proxy $proxy,
        /**
         * The maximum overall timeout for the request.
         */
        protected float $timeout,
    ) {}

    public static function fromArray(array $array): TestProxy
    {
        return new static(
            dcId   : $array['dc_id'],
            proxy  : TdSchemaRegistry::fromArray($array['proxy']),
            timeout: $array['timeout'],
        );
    }

    public function getDcId(): int
    {
        return $this->dcId;
    }

    public function getProxy(): Proxy
    {
        return $this->proxy;
    }

    public function getTimeout(): float
    {
        return $this->timeout;
    }

    public function setDcId(int $value): static
    {
        $this->dcId = $value;

        return $this;
    }

    public function setProxy(Proxy $value): static
    {
        $this->proxy = $value;

        return $this;
    }

    public function setTimeout(float $value): static
    {
        $this->timeout = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'dc_id'   => $this->dcId,
            'proxy'   => $this->proxy->jsonSerialize(),
            'timeout' => $this->timeout,
        ];
    }
}
