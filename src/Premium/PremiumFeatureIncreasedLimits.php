<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * Increased limits.
 */
class PremiumFeatureIncreasedLimits extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureIncreasedLimits';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureIncreasedLimits
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
