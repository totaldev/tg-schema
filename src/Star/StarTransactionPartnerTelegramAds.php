<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a transaction with Telegram Ad platform.
 */
class StarTransactionPartnerTelegramAds extends StarTransactionPartner
{
    public const TYPE_NAME = 'starTransactionPartnerTelegramAds';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionPartnerTelegramAds
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
