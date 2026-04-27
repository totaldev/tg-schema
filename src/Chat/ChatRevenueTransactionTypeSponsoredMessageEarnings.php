<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * Describes earnings from sponsored messages in a chat in some time frame.
 */
class ChatRevenueTransactionTypeSponsoredMessageEarnings extends ChatRevenueTransactionType
{
    public const string TYPE_NAME = 'chatRevenueTransactionTypeSponsoredMessageEarnings';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the earnings ended.
         */
        protected int $endDate,
        /**
         * Point in time (Unix timestamp) when the earnings started.
         */
        protected int $startDate,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatRevenueTransactionTypeSponsoredMessageEarnings
    {
        return new static(
            endDate  : $array['end_date'],
            startDate: $array['start_date'],
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

    public function setEndDate(int $value): static
    {
        $this->endDate = $value;

        return $this;
    }

    public function setStartDate(int $value): static
    {
        $this->startDate = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'end_date'   => $this->endDate,
            'start_date' => $this->startDate,
        ];
    }
}
