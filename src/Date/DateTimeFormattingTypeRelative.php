<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Date;

/**
 * The time must be shown relative to the current time ([in ] X seconds, minutes, hours, days, months, years [ago]).
 */
class DateTimeFormattingTypeRelative extends DateTimeFormattingType
{
    public const string TYPE_NAME = 'dateTimeFormattingTypeRelative';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): DateTimeFormattingTypeRelative
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
