<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Button;

/**
 * The button has red color.
 */
class ButtonStyleDanger extends ButtonStyle
{
    public const string TYPE_NAME = 'buttonStyleDanger';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ButtonStyleDanger
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
