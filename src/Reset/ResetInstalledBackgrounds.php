<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reset;

use Totaldev\TgSchema\TdFunction;

/**
 * Resets list of installed backgrounds to its default value.
 */
class ResetInstalledBackgrounds extends TdFunction
{
    public const TYPE_NAME = 'resetInstalledBackgrounds';

    public function __construct() {}

    public static function fromArray(array $array): ResetInstalledBackgrounds
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
