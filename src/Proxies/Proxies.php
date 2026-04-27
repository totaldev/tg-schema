<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Proxies;

use Totaldev\TgSchema\Proxy\Proxy;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of proxy servers.
 */
class Proxies extends TdObject
{
    public const string TYPE_NAME = 'proxies';

    public function __construct(
        /**
         * List of proxy servers.
         *
         * @var Proxy[]
         */
        protected array $proxies
    ) {}

    public static function fromArray(array $array): Proxies
    {
        return new static(
            proxies: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['proxies']),
        );
    }

    public function getProxies(): array
    {
        return $this->proxies;
    }

    public function setProxies(array $value): static
    {
        $this->proxies = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'proxies' => array_map(static fn($x) => $x->jsonSerialize(), $this->proxies),
        ];
    }
}
