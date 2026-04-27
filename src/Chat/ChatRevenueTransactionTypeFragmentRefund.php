<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * Describes a refund for failed withdrawal of earnings through Fragment.
 */
class ChatRevenueTransactionTypeFragmentRefund extends ChatRevenueTransactionType
{
    public const string TYPE_NAME = 'chatRevenueTransactionTypeFragmentRefund';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the transaction was refunded.
         */
        protected int $refundDate
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatRevenueTransactionTypeFragmentRefund
    {
        return new static(
            refundDate: $array['refund_date'],
        );
    }

    public function getRefundDate(): int
    {
        return $this->refundDate;
    }

    public function setRefundDate(int $value): static
    {
        $this->refundDate = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'refund_date' => $this->refundDate,
        ];
    }
}
