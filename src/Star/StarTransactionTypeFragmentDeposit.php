<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a deposit of Telegram Stars from Fragment; for regular users and bots only.
 */
class StarTransactionTypeFragmentDeposit extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeFragmentDeposit';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeFragmentDeposit
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
