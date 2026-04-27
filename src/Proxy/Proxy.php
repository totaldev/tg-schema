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
    public const string TYPE_NAME = 'proxy';

    public function __construct(
        /**
         * Unique identifier of the proxy.
         */
        protected int       $id,
        /**
         * True, if the proxy is enabled now.
         */
        protected bool      $isEnabled,
        /**
         * Point in time (Unix timestamp) when the proxy was last used; 0 if never.
         */
        protected int       $lastUsedDate,
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
            id          : $array['id'],
            isEnabled   : $array['is_enabled'],
            lastUsedDate: $array['last_used_date'],
            port        : $array['port'],
            server      : $array['server'],
            type        : TdSchemaRegistry::fromArray($array['type']),
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

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsEnabled(bool $value): static
    {
        $this->isEnabled = $value;

        return $this;
    }

    public function setLastUsedDate(int $value): static
    {
        $this->lastUsedDate = $value;

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

    public function setType(ProxyType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'id'             => $this->id,
            'is_enabled'     => $this->isEnabled,
            'last_used_date' => $this->lastUsedDate,
            'port'           => $this->port,
            'server'         => $this->server,
            'type'           => $this->type->jsonSerialize(),
        ];
    }
}
