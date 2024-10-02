<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * Disabled ads.
 */
class PremiumFeatureDisabledAds extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureDisabledAds';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureDisabledAds
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
