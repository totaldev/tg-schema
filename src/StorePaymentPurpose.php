<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Describes a purpose of an in-store payment
 */
class StorePaymentPurpose extends TdObject
{
    public const TYPE_NAME = 'StorePaymentPurpose';

    public function __construct()
    {
    }

    public static function fromArray(array $array): StorePaymentPurpose
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
