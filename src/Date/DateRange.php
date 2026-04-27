<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Date;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a date range.
 */
class DateRange extends TdObject
{
    public const string TYPE_NAME = 'dateRange';

    public function __construct(
        /**
         * Point in time (Unix timestamp) at which the date range ends.
         */
        protected int $endDate,
        /**
         * Point in time (Unix timestamp) at which the date range begins.
         */
        protected int $startDate,
    ) {}

    public static function fromArray(array $array): DateRange
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
