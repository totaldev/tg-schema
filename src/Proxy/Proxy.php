<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Proxy;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a proxy server.
 */
class Proxy extends TdObject
{
    public const TYPE_NAME = 'proxy';

    public function __construct(
        /**
         * Unique identifier of the proxy.
         */
        protected int       $id,
        /**
         * Proxy server domain or IP address.
         */
        protected string    $server,
        /**
         * Proxy server port.
         */
        protected int       $port,
        /**
         * Point in time (Unix timestamp) when the proxy was last used; 0 if never.
         */
        protected int       $lastUsedDate,
        /**
         * True, if the proxy is enabled now.
         */
        protected bool      $isEnabled,
        /**
         * Type of the proxy.
         */
        protected ProxyType $type,
    ) {}

    public static function fromArray(array $array): Proxy
    {
        return new static(
            $array['id'],
            $array['server'],
            $array['port'],
            $array['last_used_date'],
            $array['is_enabled'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function getLastUsedDate(): int
    {
        return $this->lastUsedDate;
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
            '@type'          => static::TYPE_NAME,
            'id'             => $this->id,
            'server'         => $this->server,
            'port'           => $this->port,
            'last_used_date' => $this->lastUsedDate,
            'is_enabled'     => $this->isEnabled,
            'type'           => $this->type->typeSerialize(),
        ];
    }
}
