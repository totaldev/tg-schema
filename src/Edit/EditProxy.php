<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Proxy\ProxyType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits an existing proxy server for network requests. Can be called before authorization.
 */
class EditProxy extends TdFunction
{
    public const TYPE_NAME = 'editProxy';

    public function __construct(
        /**
         * Proxy identifier.
         */
        protected int       $proxyId,
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

    public static function fromArray(array $array): EditProxy
    {
        return new static(
            $array['proxy_id'],
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

    public function getProxyId(): int
    {
        return $this->proxyId;
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
            '@type'    => static::TYPE_NAME,
            'proxy_id' => $this->proxyId,
            'server'   => $this->server,
            'port'     => $this->port,
            'enable'   => $this->enable,
            'type'     => $this->type->typeSerialize(),
        ];
    }
}
