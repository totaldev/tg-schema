<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to view last seen and read times of other users even they can't view last seen or read time for the current user.
 */
class PremiumFeatureLastSeenTimes extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureLastSeenTimes';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureLastSeenTimes
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
