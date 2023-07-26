<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Allowed to use more reactions
 */
class PremiumFeatureUniqueReactions extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureUniqueReactions';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureUniqueReactions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
