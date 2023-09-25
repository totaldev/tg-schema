<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Profile photo animation on message and chat screens
 */
class PremiumFeatureAnimatedProfilePhoto extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureAnimatedProfilePhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureAnimatedProfilePhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
