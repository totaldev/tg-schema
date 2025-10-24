<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Transaction;

use Totaldev\TgSchema\TdObject;

/**
 * Describes direction of transactions in a transaction list.
 */
class TransactionDirection extends TdObject
{
    public const string TYPE_NAME = 'TransactionDirection';

    public function __construct() {}

    public static function fromArray(array $array): TransactionDirection
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
