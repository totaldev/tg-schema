<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to choose better quality for viewed stories.
 */
class PremiumStoryFeatureVideoQuality extends PremiumStoryFeature
{
    public const TYPE_NAME = 'premiumStoryFeatureVideoQuality';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumStoryFeatureVideoQuality
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
