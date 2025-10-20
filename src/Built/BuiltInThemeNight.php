<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Built;

/**
 * Regular dark theme.
 */
class BuiltInThemeNight extends BuiltInTheme
{
    public const TYPE_NAME = 'builtInThemeNight';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BuiltInThemeNight
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
