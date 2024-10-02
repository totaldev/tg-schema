<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

/**
 * Smart Glocal payment provider.
 */
class PaymentProviderSmartGlocal extends PaymentProvider
{
    public const TYPE_NAME = 'paymentProviderSmartGlocal';

    public function __construct(
        /**
         * Public payment token.
         */
        protected string $publicToken,
        /**
         * URL for sending card tokenization requests.
         */
        protected string $tokenizeUrl,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaymentProviderSmartGlocal
    {
        return new static(
            $array['public_token'],
            $array['tokenize_url'],
        );
    }

    public function getPublicToken(): string
    {
        return $this->publicToken;
    }

    public function getTokenizeUrl(): string
    {
        return $this->tokenizeUrl;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'public_token' => $this->publicToken,
            'tokenize_url' => $this->tokenizeUrl,
        ];
    }
}
