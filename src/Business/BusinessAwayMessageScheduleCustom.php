<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

/**
 * Send away messages only in the specified time span.
 */
class BusinessAwayMessageScheduleCustom extends BusinessAwayMessageSchedule
{
    public const TYPE_NAME = 'businessAwayMessageScheduleCustom';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the away messages will start to be sent.
         */
        protected int $startDate,
        /**
         * Point in time (Unix timestamp) when the away messages will stop to be sent.
         */
        protected int $endDate
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BusinessAwayMessageScheduleCustom
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
