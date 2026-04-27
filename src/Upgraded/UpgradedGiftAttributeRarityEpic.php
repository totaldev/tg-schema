<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

/**
 * The attribute is epic.
 */
class UpgradedGiftAttributeRarityEpic extends UpgradedGiftAttributeRarity
{
    public const string TYPE_NAME = 'upgradedGiftAttributeRarityEpic';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UpgradedGiftAttributeRarityEpic
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
