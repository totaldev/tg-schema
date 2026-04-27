<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a server for relaying call data.
 */
class CallServer extends TdObject
{
    public const string TYPE_NAME = 'callServer';

    public function __construct(
        /**
         * Server identifier.
         */
        protected int            $id,
        /**
         * Server IPv4 address.
         */
        protected string         $ipAddress,
        /**
         * Server IPv6 address.
         */
        protected string         $ipv6Address,
        /**
         * Server port number.
         */
        protected int            $port,
        /**
         * Server type.
         */
        protected CallServerType $type,
    ) {}

    public static function fromArray(array $array): CallServer
    {
        return new static(
            id         : $array['id'],
            ipAddress  : $array['ip_address'],
            ipv6Address: $array['ipv6_address'],
            port       : $array['port'],
            type       : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    public function getIpv6Address(): string
    {
        return $this->ipv6Address;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getType(): CallServerType
    {
        return $this->type;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIpAddress(string $value): static
    {
        $this->ipAddress = $value;

        return $this;
    }

    public function setIpv6Address(string $value): static
    {
        $this->ipv6Address = $value;

        return $this;
    }

    public function setPort(int $value): static
    {
        $this->port = $value;

        return $this;
    }

    public function setType(CallServerType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'id'           => $this->id,
            'ip_address'   => $this->ipAddress,
            'ipv6_address' => $this->ipv6Address,
            'port'         => $this->port,
            'type'         => $this->type->jsonSerialize(),
        ];
    }
}
