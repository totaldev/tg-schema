<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

/**
 * The attribute is uncommon.
 */
class UpgradedGiftAttributeRarityUncommon extends UpgradedGiftAttributeRarity
{
    public const string TYPE_NAME = 'upgradedGiftAttributeRarityUncommon';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UpgradedGiftAttributeRarityUncommon
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
