<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Invoice;

use Totaldev\TgSchema\Labeled\LabeledPricePart;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Product invoice.
 */
class Invoice extends TdObject
{
    public const TYPE_NAME = 'invoice';

    public function __construct(
        /**
         * ISO 4217 currency code.
         */
        protected string $currency,
        /**
         * A list of objects used to calculate the total price of the product.
         *
         * @var LabeledPricePart[]
         */
        protected array  $priceParts,
        /**
         * The number of seconds between consecutive Telegram Star debiting for subscription invoices; 0 if the invoice doesn't create subscription.
         */
        protected int    $subscriptionPeriod,
        /**
         * The maximum allowed amount of tip in the smallest units of the currency.
         */
        protected int    $maxTipAmount,
        /**
         * Suggested amounts of tip in the smallest units of the currency.
         *
         * @var int[]
         */
        protected array  $suggestedTipAmounts,
        /**
         * An HTTP URL with terms of service for recurring payments. If non-empty, the invoice payment will result in recurring payments and the user must accept the terms of service before allowed to pay.
         */
        protected string $recurringPaymentTermsOfServiceUrl,
        /**
         * An HTTP URL with terms of service for non-recurring payments. If non-empty, then the user must accept the terms of service before allowed to pay.
         */
        protected string $termsOfServiceUrl,
        /**
         * True, if the payment is a test payment.
         */
        protected bool   $isTest,
        /**
         * True, if the user's name is needed for payment.
         */
        protected bool   $needName,
        /**
         * True, if the user's phone number is needed for payment.
         */
        protected bool   $needPhoneNumber,
        /**
         * True, if the user's email address is needed for payment.
         */
        protected bool   $needEmailAddress,
        /**
         * True, if the user's shipping address is needed for payment.
         */
        protected bool   $needShippingAddress,
        /**
         * True, if the user's phone number will be sent to the provider.
         */
        protected bool   $sendPhoneNumberToProvider,
        /**
         * True, if the user's email address will be sent to the provider.
         */
        protected bool   $sendEmailAddressToProvider,
        /**
         * True, if the total price depends on the shipping method.
         */
        protected bool   $isFlexible,
    ) {}

    public static function fromArray(array $array): Invoice
    {
        return new static(
            $array['currency'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['price_parts']),
            $array['subscription_period'],
            $array['max_tip_amount'],
            $array['suggested_tip_amounts'],
            $array['recurring_payment_terms_of_service_url'],
            $array['terms_of_service_url'],
            $array['is_test'],
            $array['need_name'],
            $array['need_phone_number'],
            $array['need_email_address'],
            $array['need_shipping_address'],
            $array['send_phone_number_to_provider'],
            $array['send_email_address_to_provider'],
            $array['is_flexible'],
        );
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getIsFlexible(): bool
    {
        return $this->isFlexible;
    }

    public function getIsTest(): bool
    {
        return $this->isTest;
    }

    public function getMaxTipAmount(): int
    {
        return $this->maxTipAmount;
    }

    public function getNeedEmailAddress(): bool
    {
        return $this->needEmailAddress;
    }

    public function getNeedName(): bool
    {
        return $this->needName;
    }

    public function getNeedPhoneNumber(): bool
    {
        return $this->needPhoneNumber;
    }

    public function getNeedShippingAddress(): bool
    {
        return $this->needShippingAddress;
    }

    public function getPriceParts(): array
    {
        return $this->priceParts;
    }

    public function getRecurringPaymentTermsOfServiceUrl(): string
    {
        return $this->recurringPaymentTermsOfServiceUrl;
    }

    public function getSendEmailAddressToProvider(): bool
    {
        return $this->sendEmailAddressToProvider;
    }

    public function getSendPhoneNumberToProvider(): bool
    {
        return $this->sendPhoneNumberToProvider;
    }

    public function getSubscriptionPeriod(): int
    {
        return $this->subscriptionPeriod;
    }

    public function getSuggestedTipAmounts(): array
    {
        return $this->suggestedTipAmounts;
    }

    public function getTermsOfServiceUrl(): string
    {
        return $this->termsOfServiceUrl;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                  => static::TYPE_NAME,
            'currency'                               => $this->currency,
            'price_parts'                            => array_map(static fn($x) => $x->typeSerialize(), $this->priceParts),
            'subscription_period'                    => $this->subscriptionPeriod,
            'max_tip_amount'                         => $this->maxTipAmount,
            'suggested_tip_amounts'                  => $this->suggestedTipAmounts,
            'recurring_payment_terms_of_service_url' => $this->recurringPaymentTermsOfServiceUrl,
            'terms_of_service_url'                   => $this->termsOfServiceUrl,
            'is_test'                                => $this->isTest,
            'need_name'                              => $this->needName,
            'need_phone_number'                      => $this->needPhoneNumber,
            'need_email_address'                     => $this->needEmailAddress,
            'need_shipping_address'                  => $this->needShippingAddress,
            'send_phone_number_to_provider'          => $this->sendPhoneNumberToProvider,
            'send_email_address_to_provider'         => $this->sendEmailAddressToProvider,
            'is_flexible'                            => $this->isFlexible,
        ];
    }
}
