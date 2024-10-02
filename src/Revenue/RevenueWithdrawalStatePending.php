<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Revenue;

/**
 * Withdrawal is pending.
 */
class RevenueWithdrawalStatePending extends RevenueWithdrawalState
{
    public const TYPE_NAME = 'revenueWithdrawalStatePending';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): RevenueWithdrawalStatePending
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
