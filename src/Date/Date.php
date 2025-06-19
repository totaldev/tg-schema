<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Date;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a date according to the Gregorian calendar.
 */
class Date extends TdObject
{
    public const TYPE_NAME = 'date';

    public function __construct(
        /**
         * Day of the month; 1-31.
         */
        protected int $day,
        /**
         * Month; 1-12.
         */
        protected int $month,
        /**
         * Year; 1-9999.
         */
        protected int $year
    ) {}

    public static function fromArray(array $array): Date
    {
        return new static(
            $array['day'],
            $array['month'],
            $array['year'],
        );
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'day'   => $this->day,
            'month' => $this->month,
            'year'  => $this->year,
        ];
    }
}
