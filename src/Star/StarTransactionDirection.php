<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;

/**
 * Describes direction of a transaction with Telegram Stars.
 */
class StarTransactionDirection extends TdObject
{
    public const TYPE_NAME = 'StarTransactionDirection';

    public function __construct() {}

    public static function fromArray(array $array): StarTransactionDirection
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
