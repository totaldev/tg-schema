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
    public const TYPE_NAME = 'callServer';

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
            $array['id'],
            $array['ip_address'],
            $array['ipv6_address'],
            $array['port'],
            TdSchemaRegistry::fromArray($array['type']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'id'           => $this->id,
            'ip_address'   => $this->ipAddress,
            'ipv6_address' => $this->ipv6Address,
            'port'         => $this->port,
            'type'         => $this->type->typeSerialize(),
        ];
    }
}
