<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Transaction;

/**
 * The transaction is outgoing and decreases the amount of owned currency.
 */
class TransactionDirectionOutgoing extends TransactionDirection
{
    public const string TYPE_NAME = 'transactionDirectionOutgoing';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TransactionDirectionOutgoing
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
