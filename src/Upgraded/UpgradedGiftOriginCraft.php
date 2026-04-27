<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

/**
 * The gift was crafted from other gifts.
 */
class UpgradedGiftOriginCraft extends UpgradedGiftOrigin
{
    public const string TYPE_NAME = 'upgradedGiftOriginCraft';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UpgradedGiftOriginCraft
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
