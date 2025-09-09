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
    public const TYPE_NAME = 'internalLinkTypeProxy';

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
         * Type of the proxy.
         */
        protected ProxyType $type,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeProxy
    {
        return new static(
            $array['server'],
            $array['port'],
            TdSchemaRegistry::fromArray($array['type']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'server' => $this->server,
            'port'   => $this->port,
            'type'   => $this->type->typeSerialize(),
        ];
    }
}
