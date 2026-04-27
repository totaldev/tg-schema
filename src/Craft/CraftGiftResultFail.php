<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Craft;

/**
 * Crafting has failed.
 */
class CraftGiftResultFail extends CraftGiftResult
{
    public const string TYPE_NAME = 'craftGiftResultFail';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CraftGiftResultFail
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
