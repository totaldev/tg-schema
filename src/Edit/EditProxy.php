<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Proxy\Proxy;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits an existing proxy server for network requests. Can be called before authorization.
 */
class EditProxy extends TdFunction
{
    public const string TYPE_NAME = 'editProxy';

    public function __construct(
        /**
         * Pass true to immediately enable the proxy.
         */
        protected bool  $enable,
        /**
         * The new information about the proxy.
         */
        protected Proxy $proxy,
        /**
         * Proxy identifier.
         */
        protected int   $proxyId,
    ) {}

    public static function fromArray(array $array): EditProxy
    {
        return new static(
            enable : $array['enable'],
            proxy  : TdSchemaRegistry::fromArray($array['proxy']),
            proxyId: $array['proxy_id'],
        );
    }

    public function getEnable(): bool
    {
        return $this->enable;
    }

    public function getProxy(): Proxy
    {
        return $this->proxy;
    }

    public function getProxyId(): int
    {
        return $this->proxyId;
    }

    public function setEnable(bool $value): static
    {
        $this->enable = $value;

        return $this;
    }

    public function setProxy(Proxy $value): static
    {
        $this->proxy = $value;

        return $this;
    }

    public function setProxyId(int $value): static
    {
        $this->proxyId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'enable'   => $this->enable,
            'proxy'    => $this->proxy->jsonSerialize(),
            'proxy_id' => $this->proxyId,
        ];
    }
}
