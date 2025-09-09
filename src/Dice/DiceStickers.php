<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Dice;

use Totaldev\TgSchema\TdObject;

/**
 * Contains animated stickers which must be used for dice animation rendering.
 */
class DiceStickers extends TdObject
{
    public const TYPE_NAME = 'DiceStickers';

    public function __construct() {}

    public static function fromArray(array $array): DiceStickers
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
