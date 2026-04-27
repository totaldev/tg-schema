<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Craft;

/**
 * Crafting isn't possible because one of the gifts isn't suitable for crafting.
 */
class CraftGiftResultInvalidGift extends CraftGiftResult
{
    public const string TYPE_NAME = 'craftGiftResultInvalidGift';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CraftGiftResultInvalidGift
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
