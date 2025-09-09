<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a deposit of Telegram Stars from Google Play; for regular users only.
 */
class StarTransactionTypeGooglePlayDeposit extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeGooglePlayDeposit';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeGooglePlayDeposit
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
