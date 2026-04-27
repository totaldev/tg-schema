<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Proxy;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a proxy server.
 */
class Proxy extends TdObject
{
    public const string TYPE_NAME = 'proxy';

    public function __construct(
        /**
         * Proxy server port.
         */
        protected int       $port,
        /**
         * Proxy server domain or IP address.
         */
        protected string    $server,
        /**
         * Type of the proxy.
         */
        protected ProxyType $type,
    ) {}

    public static function fromArray(array $array): Proxy
    {
        return new static(
            port  : $array['port'],
            server: $array['server'],
            type  : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getServer(): string
    {
        return $this->server;
    }

    public function getType(): ProxyType
    {
        return $this->type;
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

    public function setType(ProxyType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'port'   => $this->port,
            'server' => $this->server,
            'type'   => $this->type->jsonSerialize(),
        ];
    }
}
