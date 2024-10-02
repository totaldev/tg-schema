<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reset;

use Totaldev\TgSchema\TdFunction;

/**
 * Resets all network data usage statistics to zero. Can be called before authorization.
 */
class ResetNetworkStatistics extends TdFunction
{
    public const TYPE_NAME = 'resetNetworkStatistics';

    public function __construct() {}

    public static function fromArray(array $array): ResetNetworkStatistics
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
