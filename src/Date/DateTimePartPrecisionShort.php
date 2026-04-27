<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Date;

/**
 * Show the date or time in a short way (17.03.22 or 22:45).
 */
class DateTimePartPrecisionShort extends DateTimePartPrecision
{
    public const string TYPE_NAME = 'dateTimePartPrecisionShort';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): DateTimePartPrecisionShort
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
