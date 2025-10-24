<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * The post was refunded, because the payment for the post was refunded.
 */
class SuggestedPostRefundReasonPaymentRefunded extends SuggestedPostRefundReason
{
    public const string TYPE_NAME = 'suggestedPostRefundReasonPaymentRefunded';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedPostRefundReasonPaymentRefunded
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
