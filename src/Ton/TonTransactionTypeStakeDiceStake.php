<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ton;

/**
 * The transaction is a payment for stake dice throw.
 */
class TonTransactionTypeStakeDiceStake extends TonTransactionType
{
    public const string TYPE_NAME = 'tonTransactionTypeStakeDiceStake';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TonTransactionTypeStakeDiceStake
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
