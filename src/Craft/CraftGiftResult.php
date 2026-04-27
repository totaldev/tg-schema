<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Craft;

use Totaldev\TgSchema\TdObject;

/**
 * Contains result of gift crafting.
 */
class CraftGiftResult extends TdObject
{
    public const string TYPE_NAME = 'CraftGiftResult';

    public function __construct() {}

    public static function fromArray(array $array): CraftGiftResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
