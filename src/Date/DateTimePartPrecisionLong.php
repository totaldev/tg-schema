<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Date;

/**
 * Show the date or time in a long way (March 17, 2022 or 22:45:00).
 */
class DateTimePartPrecisionLong extends DateTimePartPrecision
{
    public const string TYPE_NAME = 'dateTimePartPrecisionLong';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): DateTimePartPrecisionLong
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
