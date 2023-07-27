<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Payment;

/**
 * Some other payment provider, for which a web payment form must be shown
 */
class PaymentProviderOther extends PaymentProvider
{
    public const TYPE_NAME = 'paymentProviderOther';

    /**
     * Payment form URL
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $url)
    {
        parent::__construct();

        $this->url = $url;
    }

    public static function fromArray(array $array): PaymentProviderOther
    {
        return new static(
            $array['url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
