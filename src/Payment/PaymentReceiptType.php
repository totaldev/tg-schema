<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of successful payment.
 */
class PaymentReceiptType extends TdObject
{
    public const TYPE_NAME = 'PaymentReceiptType';

    public function __construct() {}

    public static function fromArray(array $array): PaymentReceiptType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
