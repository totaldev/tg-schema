<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;

/**
 * Describes source or recipient of a transaction with Telegram Stars.
 */
class StarTransactionPartner extends TdObject
{
    public const TYPE_NAME = 'StarTransactionPartner';

    public function __construct() {}

    public static function fromArray(array $array): StarTransactionPartner
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
