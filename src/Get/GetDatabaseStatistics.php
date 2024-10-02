<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns database statistics.
 */
class GetDatabaseStatistics extends TdFunction
{
    public const TYPE_NAME = 'getDatabaseStatistics';

    public function __construct() {}

    public static function fromArray(array $array): GetDatabaseStatistics
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
