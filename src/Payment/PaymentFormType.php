<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of payment form.
 */
class PaymentFormType extends TdObject
{
    public const TYPE_NAME = 'PaymentFormType';

    public function __construct() {}

    public static function fromArray(array $array): PaymentFormType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
