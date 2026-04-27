<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Added;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of added proxy servers.
 */
class AddedProxies extends TdObject
{
    public const string TYPE_NAME = 'addedProxies';

    public function __construct(
        /**
         * List of proxy servers.
         *
         * @var AddedProxy[]
         */
        protected array $proxies
    ) {}

    public static function fromArray(array $array): AddedProxies
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
