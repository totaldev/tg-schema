<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * A badge in the user's profile
 */
class PremiumFeatureProfileBadge extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureProfileBadge';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureProfileBadge
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
