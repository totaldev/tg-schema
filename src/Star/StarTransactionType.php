<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of transaction with Telegram Stars.
 */
class StarTransactionType extends TdObject
{
    public const TYPE_NAME = 'StarTransactionType';

    public function __construct() {}

    public static function fromArray(array $array): StarTransactionType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
