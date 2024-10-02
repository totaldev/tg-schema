<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a transaction with Telegram through a bot.
 */
class StarTransactionPartnerTelegram extends StarTransactionPartner
{
    public const TYPE_NAME = 'starTransactionPartnerTelegram';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionPartnerTelegram
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
