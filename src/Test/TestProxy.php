<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\Proxy\ProxyType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a simple network request to the Telegram servers via proxy; for testing only. Can be called before authorization.
 */
class TestProxy extends TdFunction
{
    public const TYPE_NAME = 'testProxy';

    public function __construct(
        /**
         * Proxy server domain or IP address.
         */
        protected string    $server,
        /**
         * Proxy server port.
         */
        protected int       $port,
        /**
         * Proxy type.
         */
        protected ProxyType $type,
        /**
         * Identifier of a datacenter with which to test connection.
         */
        protected int       $dcId,
        /**
         * The maximum overall timeout for the request.
         */
        protected float     $timeout
    ) {}

    public static function fromArray(array $array): TestProxy
    {
        return new static(
            $array['server'],
            $array['port'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['dc_id'],
            $array['timeout'],
        );
    }

    public function getDcId(): int
    {
        return $this->dcId;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getServer(): string
    {
        return $this->server;
    }

    public function getTimeout(): float
    {
        return $this->timeout;
    }

    public function getType(): ProxyType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'server'  => $this->server,
            'port'    => $this->port,
            'type'    => $this->type->typeSerialize(),
            'dc_id'   => $this->dcId,
            'timeout' => $this->timeout,
        ];
    }
}
