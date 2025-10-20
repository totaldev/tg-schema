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
    public const TYPE_NAME = 'businessOpeningHoursInterval';

    public function __construct(
        /**
         * The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0-7*24*60.
         */
        protected int $startMinute,
        /**
         * The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 1-8*24*60.
         */
        protected int $endMinute,
    ) {}

    public static function fromArray(array $array): BusinessOpeningHoursInterval
    {
        return new static(
            $array['start_minute'],
            $array['end_minute'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'start_minute' => $this->startMinute,
            'end_minute'   => $this->endMinute,
        ];
    }
}
