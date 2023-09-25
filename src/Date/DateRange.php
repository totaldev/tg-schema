<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Date;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a date range
 */
class DateRange extends TdObject
{
    public const TYPE_NAME = 'dateRange';

    /**
     * Point in time (Unix timestamp) at which the date range ends
     *
     * @var int
     */
    protected int $endDate;

    /**
     * Point in time (Unix timestamp) at which the date range begins
     *
     * @var int
     */
    protected int $startDate;

    public function __construct(int $startDate, int $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

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
            '@type' => static::TYPE_NAME,
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
        ];
    }
}
