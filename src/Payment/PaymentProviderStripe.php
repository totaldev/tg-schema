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
    public const string TYPE_NAME = 'paymentProviderStripe';

    public function __construct(
        /**
         * True, if the cardholder name must be provided.
         */
        protected bool   $needCardholderName,
        /**
         * True, if the user country must be provided.
         */
        protected bool   $needCountry,
        /**
         * True, if the user ZIP/postal code must be provided.
         */
        protected bool   $needPostalCode,
        /**
         * Stripe API publishable key.
         */
        protected string $publishableKey,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaymentProviderStripe
    {
        return new static(
            needCardholderName: $array['need_cardholder_name'],
            needCountry       : $array['need_country'],
            needPostalCode    : $array['need_postal_code'],
            publishableKey    : $array['publishable_key'],
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

    public function setNeedCardholderName(bool $value): static
    {
        $this->needCardholderName = $value;

        return $this;
    }

    public function setNeedCountry(bool $value): static
    {
        $this->needCountry = $value;

        return $this;
    }

    public function setNeedPostalCode(bool $value): static
    {
        $this->needPostalCode = $value;

        return $this;
    }

    public function setPublishableKey(string $value): static
    {
        $this->publishableKey = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'need_cardholder_name' => $this->needCardholderName,
            'need_country'         => $this->needCountry,
            'need_postal_code'     => $this->needPostalCode,
            'publishable_key'      => $this->publishableKey,
        ];
    }
}
