<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to check who opened the current user's stories after they expire.
 */
class PremiumStoryFeaturePermanentViewsHistory extends PremiumStoryFeature
{
    public const TYPE_NAME = 'premiumStoryFeaturePermanentViewsHistory';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumStoryFeaturePermanentViewsHistory
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
