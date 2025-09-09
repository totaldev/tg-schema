<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * Allowed to use many additional features for stories.
 */
class PremiumFeatureUpgradedStories extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureUpgradedStories';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureUpgradedStories
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
