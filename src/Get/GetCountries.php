<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about existing countries. Can be called before authorization
 */
class GetCountries extends TdFunction
{
    public const TYPE_NAME = 'getCountries';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetCountries
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
