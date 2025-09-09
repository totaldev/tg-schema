<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to use all available message effects.
 */
class PremiumFeatureMessageEffects extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureMessageEffects';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureMessageEffects
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
