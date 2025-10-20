<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ton;

/**
 * The transaction is a transaction of an unsupported type.
 */
class TonTransactionTypeUnsupported extends TonTransactionType
{
    public const TYPE_NAME = 'tonTransactionTypeUnsupported';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TonTransactionTypeUnsupported
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
