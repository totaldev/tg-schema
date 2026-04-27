<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\TdObject;

/**
 * Describes rarity of an upgraded gift attribute.
 */
class UpgradedGiftAttributeRarity extends TdObject
{
    public const string TYPE_NAME = 'UpgradedGiftAttributeRarity';

    public function __construct() {}

    public static function fromArray(array $array): UpgradedGiftAttributeRarity
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
