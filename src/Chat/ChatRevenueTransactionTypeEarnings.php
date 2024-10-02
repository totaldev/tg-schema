<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * Describes earnings from sponsored messages in a chat in some time frame.
 */
class ChatRevenueTransactionTypeEarnings extends ChatRevenueTransactionType
{
    public const TYPE_NAME = 'chatRevenueTransactionTypeEarnings';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the earnings started.
         */
        protected int $startDate,
        /**
         * Point in time (Unix timestamp) when the earnings ended.
         */
        protected int $endDate,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatRevenueTransactionTypeEarnings
    {
        return new static(
            $array['start_date'],
            $array['end_date'],
        );
    }

    public function getEndDate(): int
    {
        return $this->endDate;
    }

    public function getStartDate(): int
    {
        return $this->startDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'start_date' => $this->startDate,
            'end_date'   => $this->endDate,
        ];
    }
}
