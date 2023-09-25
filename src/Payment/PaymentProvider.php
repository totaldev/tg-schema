<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a payment provider
 */
class PaymentProvider extends TdObject
{
    public const TYPE_NAME = 'PaymentProvider';

    public function __construct()
    {
    }

    public static function fromArray(array $array): PaymentProvider
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
