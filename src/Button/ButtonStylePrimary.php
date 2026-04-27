<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Button;

/**
 * The button has dark blue color.
 */
class ButtonStylePrimary extends ButtonStyle
{
    public const string TYPE_NAME = 'buttonStylePrimary';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ButtonStylePrimary
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
