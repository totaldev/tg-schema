<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\Proxy\ProxyType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a proxy. Call addProxy with the given parameters to process the link and add the proxy.
 */
class InternalLinkTypeProxy extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeProxy';

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
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeProxy
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
