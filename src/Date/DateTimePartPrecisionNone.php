<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Date;

/**
 * Don't show the date or time.
 */
class DateTimePartPrecisionNone extends DateTimePartPrecision
{
    public const string TYPE_NAME = 'dateTimePartPrecisionNone';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): DateTimePartPrecisionNone
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
