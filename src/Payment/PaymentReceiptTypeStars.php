<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

/**
 * The payment was done using Telegram Stars.
 */
class PaymentReceiptTypeStars extends PaymentReceiptType
{
    public const TYPE_NAME = 'paymentReceiptTypeStars';

    public function __construct(
        /**
         * Number of Telegram Stars that were paid.
         */
        protected int    $starCount,
        /**
         * Unique identifier of the transaction that can be used to dispute it.
         */
        protected string $transactionId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaymentReceiptTypeStars
    {
        return new static(
            $array['star_count'],
            $array['transaction_id'],
        );
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'star_count'     => $this->starCount,
            'transaction_id' => $this->transactionId,
        ];
    }
}
