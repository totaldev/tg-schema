<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ping;

use Totaldev\TgSchema\Proxy\Proxy;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Computes time needed to receive a response from a Telegram server through a proxy. Can be called before authorization.
 */
class PingProxy extends TdFunction
{
    public const string TYPE_NAME = 'pingProxy';

    public function __construct(
        /**
         * The proxy to test; pass null to ping a Telegram server without a proxy.
         */
        protected ?Proxy $proxy = null
    ) {}

    public static function fromArray(array $array): PingProxy
    {
        return new static(
            proxy: (isset($array['proxy']) ? TdSchemaRegistry::fromArray($array['proxy']) : null),
        );
    }

    public function getProxy(): ?Proxy
    {
        return $this->proxy;
    }

    public function setProxy(?Proxy $value): static
    {
        $this->proxy = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'proxy' => (null !== $this->proxy ? $this->proxy->jsonSerialize() : null),
        ];
    }
}
