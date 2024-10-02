<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Revenue;

use Totaldev\TgSchema\TdObject;

/**
 * Describes state of a revenue withdrawal.
 */
class RevenueWithdrawalState extends TdObject
{
    public const TYPE_NAME = 'RevenueWithdrawalState';

    public function __construct() {}

    public static function fromArray(array $array): RevenueWithdrawalState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
