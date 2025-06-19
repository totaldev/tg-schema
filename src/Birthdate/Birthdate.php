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
    public const TYPE_NAME = 'birthdate';

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
        protected int $year
    ) {}

    public static function fromArray(array $array): Birthdate
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
