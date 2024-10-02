<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * Allowed to set a premium application icons.
 */
class PremiumFeatureAppIcons extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureAppIcons';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureAppIcons
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
