<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a deposit of Telegram Stars from the Premium bot; for regular users only.
 */
class StarTransactionTypePremiumBotDeposit extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypePremiumBotDeposit';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypePremiumBotDeposit
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
