<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Statistical;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a statistical graph.
 */
class StatisticalGraph extends TdObject
{
    public const TYPE_NAME = 'StatisticalGraph';

    public function __construct() {}

    public static function fromArray(array $array): StatisticalGraph
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
