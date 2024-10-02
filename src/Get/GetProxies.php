<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of proxies that are currently set up. Can be called before authorization.
 */
class GetProxies extends TdFunction
{
    public const TYPE_NAME = 'getProxies';

    public function __construct() {}

    public static function fromArray(array $array): GetProxies
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
