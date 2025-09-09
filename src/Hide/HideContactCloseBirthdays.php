<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Hide;

use Totaldev\TgSchema\TdFunction;

/**
 * Hides the list of contacts that have close birthdays for 24 hours.
 */
class HideContactCloseBirthdays extends TdFunction
{
    public const TYPE_NAME = 'hideContactCloseBirthdays';

    public function __construct() {}

    public static function fromArray(array $array): HideContactCloseBirthdays
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
