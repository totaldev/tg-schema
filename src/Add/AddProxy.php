<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Proxy\Proxy;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a proxy server for network requests. Can be called before authorization.
 */
class AddProxy extends TdFunction
{
    public const string TYPE_NAME = 'addProxy';

    public function __construct(
        /**
         * Pass true to immediately enable the proxy.
         */
        protected bool  $enable,
        /**
         * The proxy to add.
         */
        protected Proxy $proxy,
    ) {}

    public static function fromArray(array $array): AddProxy
    {
        return new static(
            enable: $array['enable'],
            proxy : TdSchemaRegistry::fromArray($array['proxy']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'enable' => $this->enable,
            'proxy'  => $this->proxy->jsonSerialize(),
        ];
    }
}
