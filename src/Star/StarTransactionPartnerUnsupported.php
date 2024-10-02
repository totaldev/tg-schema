<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a transaction with unknown partner.
 */
class StarTransactionPartnerUnsupported extends StarTransactionPartner
{
    public const TYPE_NAME = 'starTransactionPartnerUnsupported';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionPartnerUnsupported
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
