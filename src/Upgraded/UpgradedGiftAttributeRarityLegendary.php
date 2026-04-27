<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

/**
 * The attribute is legendary.
 */
class UpgradedGiftAttributeRarityLegendary extends UpgradedGiftAttributeRarity
{
    public const string TYPE_NAME = 'upgradedGiftAttributeRarityLegendary';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UpgradedGiftAttributeRarityLegendary
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
