<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Smart Glocal payment provider
 */
class PaymentProviderSmartGlocal extends PaymentProvider
{
    public const TYPE_NAME = 'paymentProviderSmartGlocal';

    /**
     * Public payment token
     *
     * @var string
     */
    protected string $publicToken;

    public function __construct(string $publicToken)
    {
        parent::__construct();

        $this->publicToken = $publicToken;
    }

    public static function fromArray(array $array): PaymentProviderSmartGlocal
    {
        return new static(
            $array['public_token'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'public_token' => $this->publicToken,
        ];
    }

    public function getPublicToken(): string
    {
        return $this->publicToken;
    }
}
