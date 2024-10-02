<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * Allowed to use premium stickers with unique effects.
 */
class PremiumFeatureUniqueStickers extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureUniqueStickers';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureUniqueStickers
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
