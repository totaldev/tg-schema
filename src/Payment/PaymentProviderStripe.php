<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Stripe payment provider
 */
class PaymentProviderStripe extends PaymentProvider
{
    public const TYPE_NAME = 'paymentProviderStripe';

    /**
     * True, if the cardholder name must be provided
     *
     * @var bool
     */
    protected bool $needCardholderName;

    /**
     * True, if the user country must be provided
     *
     * @var bool
     */
    protected bool $needCountry;

    /**
     * True, if the user ZIP/postal code must be provided
     *
     * @var bool
     */
    protected bool $needPostalCode;

    /**
     * Stripe API publishable key
     *
     * @var string
     */
    protected string $publishableKey;

    public function __construct(
        string $publishableKey,
        bool   $needCountry,
        bool   $needPostalCode,
        bool   $needCardholderName,
    )
    {
        parent::__construct();

        $this->publishableKey = $publishableKey;
        $this->needCountry = $needCountry;
        $this->needPostalCode = $needPostalCode;
        $this->needCardholderName = $needCardholderName;
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
            '@type' => static::TYPE_NAME,
            'publishable_key' => $this->publishableKey,
            'need_country' => $this->needCountry,
            'need_postal_code' => $this->needPostalCode,
            'need_cardholder_name' => $this->needCardholderName,
        ];
    }
}
