<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

/**
 * The attribute is rare.
 */
class UpgradedGiftAttributeRarityRare extends UpgradedGiftAttributeRarity
{
    public const string TYPE_NAME = 'upgradedGiftAttributeRarityRare';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UpgradedGiftAttributeRarityRare
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
