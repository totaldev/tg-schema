<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a withdrawal of earned Telegram Stars to Telegram Ad platform; for bots and channel chats only.
 */
class StarTransactionTypeTelegramAdsWithdrawal extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeTelegramAdsWithdrawal';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeTelegramAdsWithdrawal
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
