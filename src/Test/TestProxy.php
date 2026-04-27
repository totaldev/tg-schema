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
    public const string TYPE_NAME = 'testProxy';

    public function __construct(
        /**
         * Identifier of a datacenter with which to test connection.
         */
        protected int       $dcId,
        /**
         * Proxy server port.
         */
        protected int       $port,
        /**
         * Proxy server domain or IP address.
         */
        protected string    $server,
        /**
         * The maximum overall timeout for the request.
         */
        protected float     $timeout,
        /**
         * Proxy type.
         */
        protected ProxyType $type,
    ) {}

    public static function fromArray(array $array): TestProxy
    {
        return new static(
            dcId   : $array['dc_id'],
            port   : $array['port'],
            server : $array['server'],
            timeout: $array['timeout'],
            type   : TdSchemaRegistry::fromArray($array['type']),
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

    public function setDcId(int $value): static
    {
        $this->dcId = $value;

        return $this;
    }

    public function setPort(int $value): static
    {
        $this->port = $value;

        return $this;
    }

    public function setServer(string $value): static
    {
        $this->server = $value;

        return $this;
    }

    public function setTimeout(float $value): static
    {
        $this->timeout = $value;

        return $this;
    }

    public function setType(ProxyType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'dc_id'   => $this->dcId,
            'port'    => $this->port,
            'server'  => $this->server,
            'timeout' => $this->timeout,
            'type'    => $this->type->jsonSerialize(),
        ];
    }
}
