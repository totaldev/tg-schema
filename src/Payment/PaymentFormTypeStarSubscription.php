<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

use Totaldev\TgSchema\Star\StarSubscriptionPricing;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The payment form is for a payment in Telegram Stars for subscription.
 */
class PaymentFormTypeStarSubscription extends PaymentFormType
{
    public const TYPE_NAME = 'paymentFormTypeStarSubscription';

    public function __construct(
        /**
         * Information about subscription plan.
         */
        protected StarSubscriptionPricing $pricing
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaymentFormTypeStarSubscription
    {
        return new static(
            TdSchemaRegistry::fromArray($array['pricing']),
        );
    }

    public function getPricing(): StarSubscriptionPricing
    {
        return $this->pricing;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'pricing' => $this->pricing->typeSerialize(),
        ];
    }
}
