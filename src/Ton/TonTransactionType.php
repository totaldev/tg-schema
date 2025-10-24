<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ton;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of transaction with Toncoins.
 */
class TonTransactionType extends TdObject
{
    public const string TYPE_NAME = 'TonTransactionType';

    public function __construct() {}

    public static function fromArray(array $array): TonTransactionType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
