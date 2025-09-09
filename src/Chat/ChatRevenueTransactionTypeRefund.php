<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * Describes a refund for failed withdrawal of earnings.
 */
class ChatRevenueTransactionTypeRefund extends ChatRevenueTransactionType
{
    public const TYPE_NAME = 'chatRevenueTransactionTypeRefund';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the transaction was refunded.
         */
        protected int    $refundDate,
        /**
         * Name of the payment provider.
         */
        protected string $provider,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatRevenueTransactionTypeRefund
    {
        return new static(
            $array['refund_date'],
            $array['provider'],
        );
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function getRefundDate(): int
    {
        return $this->refundDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'refund_date' => $this->refundDate,
            'provider'    => $this->provider,
        ];
    }
}
