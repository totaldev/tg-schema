<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

use Totaldev\TgSchema\TdObject;

/**
 * Contains the result of a payment request.
 */
class PaymentResult extends TdObject
{
    public const TYPE_NAME = 'paymentResult';

    public function __construct(
        /**
         * True, if the payment request was successful; otherwise, the verification_url will be non-empty.
         */
        protected bool   $success,
        /**
         * URL for additional payment credentials verification.
         */
        protected string $verificationUrl,
    ) {}

    public static function fromArray(array $array): PaymentResult
    {
        return new static(
            $array['success'],
            $array['verification_url'],
        );
    }

    public function getSuccess(): bool
    {
        return $this->success;
    }

    public function getVerificationUrl(): string
    {
        return $this->verificationUrl;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'success'          => $this->success,
            'verification_url' => $this->verificationUrl,
        ];
    }
}
