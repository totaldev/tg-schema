<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

/**
 * Send away messages always.
 */
class BusinessAwayMessageScheduleAlways extends BusinessAwayMessageSchedule
{
    public const TYPE_NAME = 'businessAwayMessageScheduleAlways';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BusinessAwayMessageScheduleAlways
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
