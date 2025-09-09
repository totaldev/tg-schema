<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

/**
 * Some other payment provider, for which a web payment form must be shown.
 */
class PaymentProviderOther extends PaymentProvider
{
    public const TYPE_NAME = 'paymentProviderOther';

    public function __construct(
        /**
         * Payment form URL.
         */
        protected string $url
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaymentProviderOther
    {
        return new static(
            $array['url'],
        );
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url'   => $this->url,
        ];
    }
}
