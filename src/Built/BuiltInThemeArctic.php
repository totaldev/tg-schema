<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Built;

/**
 * Arctic light theme.
 */
class BuiltInThemeArctic extends BuiltInTheme
{
    public const string TYPE_NAME = 'builtInThemeArctic';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BuiltInThemeArctic
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
