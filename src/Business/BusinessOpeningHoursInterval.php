<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;

/**
 * Describes an interval of time when the business is open.
 */
class BusinessOpeningHoursInterval extends TdObject
{
    public const string TYPE_NAME = 'businessOpeningHoursInterval';

    public function __construct(
        /**
         * The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 1-8*24*60.
         */
        protected int $endMinute,
        /**
         * The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0-7*24*60.
         */
        protected int $startMinute,
    ) {}

    public static function fromArray(array $array): BusinessOpeningHoursInterval
    {
        return new static(
            endMinute  : $array['end_minute'],
            startMinute: $array['start_minute'],
        );
    }

    public function getEndMinute(): int
    {
        return $this->endMinute;
    }

    public function getStartMinute(): int
    {
        return $this->startMinute;
    }

    public function setEndMinute(int $value): static
    {
        $this->endMinute = $value;

        return $this;
    }

    public function setStartMinute(int $value): static
    {
        $this->startMinute = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'end_minute'   => $this->endMinute,
            'start_minute' => $this->startMinute,
        ];
    }
}
