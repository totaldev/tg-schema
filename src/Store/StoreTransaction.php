<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Store;

use Totaldev\TgSchema\TdObject;

/**
 * Describes an in-store transaction.
 */
class StoreTransaction extends TdObject
{
    public const TYPE_NAME = 'StoreTransaction';

    public function __construct() {}

    public static function fromArray(array $array): StoreTransaction
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
