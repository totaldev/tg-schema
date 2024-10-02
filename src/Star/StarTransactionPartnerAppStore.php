<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a transaction with App Store.
 */
class StarTransactionPartnerAppStore extends StarTransactionPartner
{
    public const TYPE_NAME = 'starTransactionPartnerAppStore';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionPartnerAppStore
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
