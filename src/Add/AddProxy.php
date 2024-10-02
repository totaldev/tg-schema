<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Proxy\ProxyType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a proxy server for network requests. Can be called before authorization.
 */
class AddProxy extends TdFunction
{
    public const TYPE_NAME = 'addProxy';

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
         * Pass true to immediately enable the proxy.
         */
        protected bool      $enable,
        /**
         * Proxy type.
         */
        protected ProxyType $type,
    ) {}

    public static function fromArray(array $array): AddProxy
    {
        return new static(
            $array['server'],
            $array['port'],
            $array['enable'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getEnable(): bool
    {
        return $this->enable;
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

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'server' => $this->server,
            'port'   => $this->port,
            'enable' => $this->enable,
            'type'   => $this->type->typeSerialize(),
        ];
    }
}
