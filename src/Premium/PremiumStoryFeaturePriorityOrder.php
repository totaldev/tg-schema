<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * Stories of the current user are displayed before stories of non-Premium contacts, supergroups, and channels.
 */
class PremiumStoryFeaturePriorityOrder extends PremiumStoryFeature
{
    public const TYPE_NAME = 'premiumStoryFeaturePriorityOrder';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumStoryFeaturePriorityOrder
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
