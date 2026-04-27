<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Button;

/**
 * The button has default style.
 */
class ButtonStyleDefault extends ButtonStyle
{
    public const string TYPE_NAME = 'buttonStyleDefault';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ButtonStyleDefault
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
