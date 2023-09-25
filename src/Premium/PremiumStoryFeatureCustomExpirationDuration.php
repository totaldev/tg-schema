<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The ability to set custom expiration duration for stories
 */
class PremiumStoryFeatureCustomExpirationDuration extends PremiumStoryFeature
{
    public const TYPE_NAME = 'premiumStoryFeatureCustomExpirationDuration';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumStoryFeatureCustomExpirationDuration
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
