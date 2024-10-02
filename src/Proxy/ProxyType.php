<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Proxy;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the type of proxy server.
 */
class ProxyType extends TdObject
{
    public const TYPE_NAME = 'ProxyType';

    public function __construct() {}

    public static function fromArray(array $array): ProxyType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
