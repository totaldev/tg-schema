<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of supported time zones.
 */
class GetTimeZones extends TdFunction
{
    public const TYPE_NAME = 'getTimeZones';

    public function __construct() {}

    public static function fromArray(array $array): GetTimeZones
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
