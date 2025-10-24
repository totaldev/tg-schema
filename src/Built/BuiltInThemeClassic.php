<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Built;

/**
 * Classic light theme.
 */
class BuiltInThemeClassic extends BuiltInTheme
{
    public const string TYPE_NAME = 'builtInThemeClassic';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BuiltInThemeClassic
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
