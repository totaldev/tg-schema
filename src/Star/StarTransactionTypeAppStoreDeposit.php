<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a deposit of Telegram Stars from App Store; for regular users only.
 */
class StarTransactionTypeAppStoreDeposit extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeAppStoreDeposit';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeAppStoreDeposit
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
