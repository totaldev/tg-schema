<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Date;

use Totaldev\TgSchema\TdObject;

/**
 * Describes precision with which to show a date or a time.
 */
class DateTimePartPrecision extends TdObject
{
    public const string TYPE_NAME = 'DateTimePartPrecision';

    public function __construct() {}

    public static function fromArray(array $array): DateTimePartPrecision
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
