<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Proxies;

use Totaldev\TgSchema\Proxy\Proxy;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of proxy servers
 */
class Proxies extends TdObject
{
    public const TYPE_NAME = 'proxies';

    /**
     * List of proxy servers
     *
     * @var Proxy[]
     */
    protected array $proxies;

    public function __construct(array $proxies)
    {
        $this->proxies = $proxies;
    }

    public static function fromArray(array $array): Proxies
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['proxies']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->proxies),
        ];
    }

    public function getProxies(): array
    {
        return $this->proxies;
    }
}