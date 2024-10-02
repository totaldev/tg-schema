<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to use Business features.
 */
class PremiumFeatureBusiness extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureBusiness';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureBusiness
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
