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
    public const TYPE_NAME = 'dateRange';

    public function __construct(
        /**
         * Point in time (Unix timestamp) at which the date range begins.
         */
        protected int $startDate,
        /**
         * Point in time (Unix timestamp) at which the date range ends.
         */
        protected int $endDate
    ) {}

    public static function fromArray(array $array): DateRange
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
