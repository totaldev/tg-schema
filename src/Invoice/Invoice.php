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
    public const string TYPE_NAME = 'invoice';

    public function __construct(
        /**
         * ISO 4217 currency code.
         */
        protected string $currency,
        /**
         * True, if the total price depends on the shipping method.
         */
        protected bool   $isFlexible,
        /**
         * True, if the payment is a test payment.
         */
        protected bool   $isTest,
        /**
         * The maximum allowed amount of tip in the smallest units of the currency.
         */
        protected int    $maxTipAmount,
        /**
         * True, if the user's email address is needed for payment.
         */
        protected bool   $needEmailAddress,
        /**
         * True, if the user's name is needed for payment.
         */
        protected bool   $needName,
        /**
         * True, if the user's phone number is needed for payment.
         */
        protected bool   $needPhoneNumber,
        /**
         * True, if the user's shipping address is needed for payment.
         */
        protected bool   $needShippingAddress,
        /**
         * A list of objects used to calculate the total price of the product.
         *
         * @var LabeledPricePart[]
         */
        protected array  $priceParts,
        /**
         * An HTTP URL with terms of service for recurring payments. If non-empty, the invoice payment will result in recurring payments and the user must accept the terms of service before allowed to pay.
         */
        protected string $recurringPaymentTermsOfServiceUrl,
        /**
         * True, if the user's email address will be sent to the provider.
         */
        protected bool   $sendEmailAddressToProvider,
        /**
         * True, if the user's phone number will be sent to the provider.
         */
        protected bool   $sendPhoneNumberToProvider,
        /**
         * The number of seconds between consecutive Telegram Star debiting for subscription invoices; 0 if the invoice doesn't create subscription.
         */
        protected int    $subscriptionPeriod,
        /**
         * Suggested amounts of tip in the smallest units of the currency.
         *
         * @var int[]
         */
        protected array  $suggestedTipAmounts,
        /**
         * An HTTP URL with terms of service for non-recurring payments. If non-empty, then the user must accept the terms of service before allowed to pay.
         */
        protected string $termsOfServiceUrl,
    ) {}

    public static function fromArray(array $array): Invoice
    {
        return new static(
            currency                         : $array['currency'],
            isFlexible                       : $array['is_flexible'],
            isTest                           : $array['is_test'],
            maxTipAmount                     : $array['max_tip_amount'],
            needEmailAddress                 : $array['need_email_address'],
            needName                         : $array['need_name'],
            needPhoneNumber                  : $array['need_phone_number'],
            needShippingAddress              : $array['need_shipping_address'],
            priceParts                       : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['price_parts']),
            recurringPaymentTermsOfServiceUrl: $array['recurring_payment_terms_of_service_url'],
            sendEmailAddressToProvider       : $array['send_email_address_to_provider'],
            sendPhoneNumberToProvider        : $array['send_phone_number_to_provider'],
            subscriptionPeriod               : $array['subscription_period'],
            suggestedTipAmounts              : $array['suggested_tip_amounts'],
            termsOfServiceUrl                : $array['terms_of_service_url'],
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

    public function setCurrency(string $value): static
    {
        $this->currency = $value;

        return $this;
    }

    public function setIsFlexible(bool $value): static
    {
        $this->isFlexible = $value;

        return $this;
    }

    public function setIsTest(bool $value): static
    {
        $this->isTest = $value;

        return $this;
    }

    public function setMaxTipAmount(int $value): static
    {
        $this->maxTipAmount = $value;

        return $this;
    }

    public function setNeedEmailAddress(bool $value): static
    {
        $this->needEmailAddress = $value;

        return $this;
    }

    public function setNeedName(bool $value): static
    {
        $this->needName = $value;

        return $this;
    }

    public function setNeedPhoneNumber(bool $value): static
    {
        $this->needPhoneNumber = $value;

        return $this;
    }

    public function setNeedShippingAddress(bool $value): static
    {
        $this->needShippingAddress = $value;

        return $this;
    }

    public function setPriceParts(array $value): static
    {
        $this->priceParts = $value;

        return $this;
    }

    public function setRecurringPaymentTermsOfServiceUrl(string $value): static
    {
        $this->recurringPaymentTermsOfServiceUrl = $value;

        return $this;
    }

    public function setSendEmailAddressToProvider(bool $value): static
    {
        $this->sendEmailAddressToProvider = $value;

        return $this;
    }

    public function setSendPhoneNumberToProvider(bool $value): static
    {
        $this->sendPhoneNumberToProvider = $value;

        return $this;
    }

    public function setSubscriptionPeriod(int $value): static
    {
        $this->subscriptionPeriod = $value;

        return $this;
    }

    public function setSuggestedTipAmounts(array $value): static
    {
        $this->suggestedTipAmounts = $value;

        return $this;
    }

    public function setTermsOfServiceUrl(string $value): static
    {
        $this->termsOfServiceUrl = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                  => static::TYPE_NAME,
            'currency'                               => $this->currency,
            'is_flexible'                            => $this->isFlexible,
            'is_test'                                => $this->isTest,
            'max_tip_amount'                         => $this->maxTipAmount,
            'need_email_address'                     => $this->needEmailAddress,
            'need_name'                              => $this->needName,
            'need_phone_number'                      => $this->needPhoneNumber,
            'need_shipping_address'                  => $this->needShippingAddress,
            'price_parts'                            => array_map(static fn($x) => $x->jsonSerialize(), $this->priceParts),
            'recurring_payment_terms_of_service_url' => $this->recurringPaymentTermsOfServiceUrl,
            'send_email_address_to_provider'         => $this->sendEmailAddressToProvider,
            'send_phone_number_to_provider'          => $this->sendPhoneNumberToProvider,
            'subscription_period'                    => $this->subscriptionPeriod,
            'suggested_tip_amounts'                  => $this->suggestedTipAmounts,
            'terms_of_service_url'                   => $this->termsOfServiceUrl,
        ];
    }
}
