<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a transaction with Google Play.
 */
class StarTransactionPartnerGooglePlay extends StarTransactionPartner
{
    public const TYPE_NAME = 'starTransactionPartnerGooglePlay';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionPartnerGooglePlay
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
