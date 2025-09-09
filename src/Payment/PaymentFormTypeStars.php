<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

/**
 * The payment form is for a payment in Telegram Stars.
 */
class PaymentFormTypeStars extends PaymentFormType
{
    public const TYPE_NAME = 'paymentFormTypeStars';

    public function __construct(
        /**
         * Number of Telegram Stars that will be paid.
         */
        protected int $starCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaymentFormTypeStars
    {
        return new static(
            $array['star_count'],
        );
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'star_count' => $this->starCount,
        ];
    }
}
