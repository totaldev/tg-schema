<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

/**
 * Stripe payment provider.
 */
class PaymentProviderStripe extends PaymentProvider
{
    public const TYPE_NAME = 'paymentProviderStripe';

    public function __construct(
        /**
         * Stripe API publishable key.
         */
        protected string $publishableKey,
        /**
         * True, if the user country must be provided.
         */
        protected bool   $needCountry,
        /**
         * True, if the user ZIP/postal code must be provided.
         */
        protected bool   $needPostalCode,
        /**
         * True, if the cardholder name must be provided.
         */
        protected bool   $needCardholderName,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaymentProviderStripe
    {
        return new static(
            $array['publishable_key'],
            $array['need_country'],
            $array['need_postal_code'],
            $array['need_cardholder_name'],
        );
    }

    public function getNeedCardholderName(): bool
    {
        return $this->needCardholderName;
    }

    public function getNeedCountry(): bool
    {
        return $this->needCountry;
    }

    public function getNeedPostalCode(): bool
    {
        return $this->needPostalCode;
    }

    public function getPublishableKey(): string
    {
        return $this->publishableKey;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'publishable_key'      => $this->publishableKey,
            'need_country'         => $this->needCountry,
            'need_postal_code'     => $this->needPostalCode,
            'need_cardholder_name' => $this->needCardholderName,
        ];
    }
}
