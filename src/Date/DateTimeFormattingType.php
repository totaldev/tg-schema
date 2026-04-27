<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Date;

use Totaldev\TgSchema\TdObject;

/**
 * Describes date and time formatting.
 */
class DateTimeFormattingType extends TdObject
{
    public const string TYPE_NAME = 'DateTimeFormattingType';

    public function __construct() {}

    public static function fromArray(array $array): DateTimeFormattingType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
