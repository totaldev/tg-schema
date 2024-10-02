<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Revenue;

/**
 * Withdrawal failed.
 */
class RevenueWithdrawalStateFailed extends RevenueWithdrawalState
{
    public const TYPE_NAME = 'revenueWithdrawalStateFailed';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): RevenueWithdrawalStateFailed
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
