<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Birthdate;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a birthdate of a user.
 */
class Birthdate extends TdObject
{
    public const string TYPE_NAME = 'birthdate';

    public function __construct(
        /**
         * Day of the month; 1-31.
         */
        protected int $day,
        /**
         * Month of the year; 1-12.
         */
        protected int $month,
        /**
         * Birth year; 0 if unknown.
         */
        protected int $year,
    ) {}

    public static function fromArray(array $array): Birthdate
    {
        return new static(
            day  : $array['day'],
            month: $array['month'],
            year : $array['year'],
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

    public function setDay(int $value): static
    {
        $this->day = $value;

        return $this;
    }

    public function setMonth(int $value): static
    {
        $this->month = $value;

        return $this;
    }

    public function setYear(int $value): static
    {
        $this->year = $value;

        return $this;
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
