<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Transaction;

/**
 * The transaction is incoming and increases the amount of owned currency.
 */
class TransactionDirectionIncoming extends TransactionDirection
{
    public const string TYPE_NAME = 'transactionDirectionIncoming';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TransactionDirectionIncoming
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
