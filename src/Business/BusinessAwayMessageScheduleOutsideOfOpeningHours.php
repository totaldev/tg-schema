<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

/**
 * Send away messages outside of the business opening hours.
 */
class BusinessAwayMessageScheduleOutsideOfOpeningHours extends BusinessAwayMessageSchedule
{
    public const TYPE_NAME = 'businessAwayMessageScheduleOutsideOfOpeningHours';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BusinessAwayMessageScheduleOutsideOfOpeningHours
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
