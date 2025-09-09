<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to choose accent color for replies and user profile.
 */
class PremiumFeatureAccentColor extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureAccentColor';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureAccentColor
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
