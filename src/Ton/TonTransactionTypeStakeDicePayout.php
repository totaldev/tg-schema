<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ton;

/**
 * The transaction is a payment for successful stake dice throw.
 */
class TonTransactionTypeStakeDicePayout extends TonTransactionType
{
    public const string TYPE_NAME = 'tonTransactionTypeStakeDicePayout';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TonTransactionTypeStakeDicePayout
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
