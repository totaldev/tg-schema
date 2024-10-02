<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the type of inline keyboard button.
 */
class InlineKeyboardButtonType extends TdObject
{
    public const TYPE_NAME = 'InlineKeyboardButtonType';

    public function __construct() {}

    public static function fromArray(array $array): InlineKeyboardButtonType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
