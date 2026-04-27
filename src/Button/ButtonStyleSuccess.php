<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Button;

/**
 * The button has green color.
 */
class ButtonStyleSuccess extends ButtonStyle
{
    public const string TYPE_NAME = 'buttonStyleSuccess';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ButtonStyleSuccess
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
