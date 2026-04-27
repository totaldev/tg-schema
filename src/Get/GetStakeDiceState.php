<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the current state of stake dice.
 */
class GetStakeDiceState extends TdFunction
{
    public const string TYPE_NAME = 'getStakeDiceState';

    public function __construct() {}

    public static function fromArray(array $array): GetStakeDiceState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
