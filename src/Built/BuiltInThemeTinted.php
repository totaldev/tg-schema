<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Built;

/**
 * Tinted dark theme.
 */
class BuiltInThemeTinted extends BuiltInTheme
{
    public const string TYPE_NAME = 'builtInThemeTinted';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BuiltInThemeTinted
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
